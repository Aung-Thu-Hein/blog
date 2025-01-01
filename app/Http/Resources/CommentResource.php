<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'comments',
            'id' => $this->id,
            'attributes' => [
                'postId' => $this->post->id,
                'commentedBy' => $this->user->name,
                'comment' => $this->comment
            ],
            'relationship' => [
                'user' => [
                    'data' => [
                        'type' => 'users',
                        'id' => $this->user->id
                    ]
                ],
                'post' => [
                    'data' => [
                        'type' => 'posts',
                        'id' => $this->post->id
                    ]
                ]
            ]
        ];
    }
}
