<?php

namespace App\Daos;

use App\Contracts\Daos\CommentDaoInterface;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

class CommentDao implements CommentDaoInterface
{
    public function getAllCommentsByPostId($postId): Collection
    {
        return Comment::with('user')->where('post_id', $postId)->get();
    }

    public function getComment($id): Comment
    {
        return Comment::findOrFail($id);
    }

    public function create(array $data): Comment
    {
        return Comment::create($data);
    }

    public function update($id, array $data): bool
    {
        $comment = Comment::findOrFail($id);

        return $comment->update($data);
    }

    public function delete($id): ?bool
    {
        $comment = Comment::findOrFail($id);

        return $comment->delete();
    }
}
