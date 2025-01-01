<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this->resource);
        return [
            'type' => 'posts',
            'id' => $this->id,
            'attributes' => [
                'title' => $this->title,
                'body' => $this->body,
                'createdBy' => $this->created_by,
                'createdAt' => $this->created_at,
                'updatedAt' => $this->updated_at
            ],
            'relationships' => [
                'users' => [
                    'data' => [
                        'id' => $this->created_by,
                        'type' => 'users'
                    ]
                ],
                'comments' => [
                    'data' => $this->comments->map(function ($comment) {
                        return [
                            'type' => 'comments',
                            'id' => $comment->id
                        ];
                    })
                ]
            ]
        ];
    }
}
