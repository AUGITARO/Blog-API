<?php

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function actions()
    {
        $actions = parent::actions();

        unset(
            $actions['index'],
            $actions['view'],
            $actions['update'],
            $actions['delete'],
            $actions['options'],
        );

        return $actions;
    }
}