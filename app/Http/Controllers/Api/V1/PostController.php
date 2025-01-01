<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\Services\PostServiceInterface;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(protected PostServiceInterface $postService)
    {

    }

    public function index()
    {
        return $this->postService->getAllPosts();
    }

    public function store(Request $request)
    {
        return $this->postService->createPost($request);
    }

    public function update(Request $request, $id)
    {
        return $this->postService->updatePost($id, $request);
    }

    public function destroy(Post $post)
    {
        return $this->postService->deletePost($post->id);
    }
}
