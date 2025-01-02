<?php

namespace App\Services;

use App\Contracts\Daos\CommentDaoInterface;
use App\Contracts\Services\CommentServiceInterface;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class CommentService implements CommentServiceInterface
{
    public function __construct(protected CommentDaoInterface $commentDao)
    {

    }

    public function getAllCommentsByPostId($postId): ResourceCollection
    {
        $comments = $this->commentDao->getAllCommentsByPostId($postId);
 
        return CommentResource::collection($comments);
    }

    public function getComment($id): CommentResource
    {
        $comment = $this->commentDao->getComment($id);

        return new CommentResource($comment);
    }

    public function createComment(Request $request): CommentResource
    {
        $data = [
            'post_id' => $request->input('data.attributes.postId'),
            'commented_by' => $request->input('data.attributes.commentedBy'),
            'comment' => $request->input('data.attributes.comment')
        ];

        $comment = $this->commentDao->create($data);

        return new CommentResource($comment);
    }

    public function updateComment($id, Request $request): bool
    {
        $data = [
            'post_id' => $request->input('data.attributes.postId'),
            'commented_by' => $request->input('data.attributes.commentedBy'),
            'comment' => $request->input('data.attributes.comment')
        ];

        return $this->commentDao->update($id, $data);
    }

    public function deleteComment($id): ?bool
    {
        return $this->commentDao->delete($id);
    }
}
