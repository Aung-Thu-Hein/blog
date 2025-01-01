<?php

namespace App\Services;

use App\Contracts\Daos\PostDaoInterface;
use App\Contracts\Services\PostServiceInterface;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostService implements PostServiceInterface
{
    public function __construct(protected PostDaoInterface $postDao)
    {

    }

    public function getAllPosts()
    {
        $posts = $this->postDao->all();

        return PostResource::collection($posts);
    }

    public function getPost($id)
    {
        $post = $this->postDao->getPost($id);

        return new PostResource($post);
    }

    public function createPost(Request $request)
    {
        $data = [
            'title' => $request->input('data.attributes.title'),
            'body' => $request->input('data.attributes.body'),
            'created_by' => $request->input('data.attributes.createdBy')
        ];

        $post = $this->postDao->create($data);

        return new PostResource($post);
    }
    public function updatePost($id, Request $request)
    {
        $data = [
            'title' => $request->input('data.attributes.title'),
            'body' => $request->input('data.attributes.body'),
            'created_by' => $request->input('data.attributes.createdBy')
        ];

        return $this->postDao->update($id, $data);
    }

    public function deletePost($id)
    {
        return $this->postDao->delete($id);
    }
}
