<?php

declare(strict_types=1);

namespace app\services\post;

use app\dto\post\PostCreateDto;
use app\models\Post;

class PostService
{
    /**
     * @noinspection PhpUnhandledExceptionInspection
     */
    public function create(PostCreateDto $postCreateDto): array
    {
        $post = new Post();

        $post->title = $postCreateDto->title;
        $post->content = $postCreateDto->content;
        $post->user_id = $postCreateDto->user_id;

        if ($post->validate()) {
            $post->save();
            $post->refresh();

            return $post->attributes;
        }

        return $post->errors;
    }
}