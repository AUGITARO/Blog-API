<?php

declare(strict_types=1);

namespace app\controllers;

use app\dto\post\PostCreateDto;
use app\services\post\PostService;
use Yii;
use yii\rest\Controller;
use yii\web\Response;

class PostController extends Controller
{
    const HTTP_CREATED = 201;
    const HTTP_UNPROCESSABLE_ENTITY = 422;

    public function actionCreate(): array
    {
        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $response->setStatusCode(self::HTTP_UNPROCESSABLE_ENTITY);

        $postCreateDto = PostCreateDto::fromArray(Yii::$app->request->post());
        $result = (new PostService())->create($postCreateDto);

        if (isset($result['id'])) {
            $response->setStatusCode(self::HTTP_CREATED);
        }

        return $result;
    }
}