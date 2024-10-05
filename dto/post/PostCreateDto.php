<?php

declare(strict_types=1);

namespace app\dto\post;

class PostCreateDto
{
    public function __construct(
        public ?string $title,
        public ?string $content,
        public ?int    $user_id,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new PostCreateDto(
            $data['title'] ?? null,
            $data['content'] ?? null,
            $data['user_id'] ?? 1,
        );
    }
}
