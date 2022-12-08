<?php

class SiteController
{
    public function actionIndex()
    {
        $tasksList = [];
        $tasksList = Task::getTasksList();

        require_once(ROOT.'/views/site/index.php');

        return true;
    }

    public function actionCreate()
    {
        $errors = false;
        $result = false;

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['description'] = $_POST['description'];

            if (!Validation::checkName($options['name'])) {
                $errors[] = 'The name must not be shorter than 3 characters';
            }
            if (!Validation::checkDescription($options['description'])) {
                $errors[] = 'The description must not be shorter than 10 characters';
            }
            if ($errors === false) {
                $result = Task::create($options);

                $_SESSION['success'] = 'Successful adding of the task';
                header('Location: /');
            }
        }
        require_once(ROOT.'/views/site/create.php');

        return true;
    }

    public function actionUpdate($id)
    {
        $taskItem = Task::getTaskById($id);

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['description'] = $_POST['description'];

            Task::update($id, $options);

            $_SESSION['success'] = 'Successful updating of the task';
            header('Location: /');
        }

        require_once(ROOT.'/views/site/edit.php');

        return true;
    }

    public function actionDelete($id)
    {
        $tasksList = Task::getTasksList();

        Task::delete($id);
        header('Location: /');

        require_once(ROOT.'/views/site/index.php');

        return true;
    }

    public function actionTruncate()
    {
        $tasksList = Task::getTasksList();

        Task::truncate();
        header('Location: /');

        require_once(ROOT.'/views/site/index.php');

        return true;
    }
}