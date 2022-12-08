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
        $name = '';
        $description = '';
        $errors = false;
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];

            if (!Validation::checkName($name)) {
                $errors[] = 'The name must not be shorter than 3 characters';
            }
            if (!Validation::checkDescription($description)) {
                $errors[] = 'The description must not be shorter than 10 characters';
            }
            if ($errors === false) {
                $result = Task::create($name, $description);

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

        $name = '';
        $description = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];

            Task::update($id, $name, $description);

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