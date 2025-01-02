<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\Services\CommentServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct(protected CommentServiceInterface $commentService)
    {
        
    }

    public function index($postId)
    {
        return $this->commentService->getAllCommentsByPostId($postId);
    }

    public function store(Request $request)
    {
        return $this->commentService->createComment($request);
    }

    public function show(string $id)
    {
        return $this->commentService->getComment($id);
    }

    public function update(Request $request, string $id)
    {
        return $this->commentService->updateComment($id, $request);
    }

    public function destroy(string $id)
    {
        return $this->commentService->deleteComment($id);
    }
}
