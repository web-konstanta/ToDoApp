<?php

class SiteController
{
    public function actionIndex()
    {
        $tasksList = Task::getTasksList();

        require_once(ROOT.'/views/site/index.php');

        return true;
    }
}