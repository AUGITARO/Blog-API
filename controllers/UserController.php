<?php

declare(strict_types=1);

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';


    public function actions(): array
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