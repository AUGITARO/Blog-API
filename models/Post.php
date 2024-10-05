<?php

declare(strict_types=1);

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property int    $id
 * @property string $title
 * @property string $content
 * @property int    $user_id
 * @property string $created_at
 */
class Post extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'post';
    }

    public function rules(): array
    {
        return [
            ['title', 'required'],
            ['content', 'required'],
            ['user_id', 'required'],
        ];
    }
}
