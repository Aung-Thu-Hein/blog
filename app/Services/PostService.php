<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\PostResource;
use App\Contracts\Daos\PostDaoInterface;
use App\Contracts\Services\PostServiceInterface;

class PostService implements PostServiceInterface
{
    public function __construct(protected PostDaoInterface $postDao)
    {

    }

    public function getAllPosts(): ResourceCollection
    {
        $posts = $this->postDao->all();

        return PostResource::collection($posts);
    }

    public function getPost($id): PostResource
    {
        $post = $this->postDao->getPost($id);

        return new PostResource($post);
    }

    public function createPost(Request $request): PostResource
    {
        $data = [
            'title' => $request->input('data.attributes.title'),
            'body' => $request->input('data.attributes.body'),
            'created_by' => $request->input('data.attributes.createdBy')
        ];

        $post = $this->postDao->create($data);

        return new PostResource($post);
    }
    public function updatePost($id, Request $request): bool
    {
        $data = [
            'title' => $request->input('data.attributes.title'),
            'body' => $request->input('data.attributes.body'),
            'created_by' => $request->input('data.attributes.createdBy')
        ];

        return $this->postDao->update($id, $data);
    }

    public function deletePost($id): bool|null
    {
        return $this->postDao->delete($id);
    }
}
