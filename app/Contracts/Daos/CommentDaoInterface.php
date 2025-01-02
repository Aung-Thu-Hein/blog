<?php

namespace App\Contracts\Daos;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

interface CommentDaoInterface
{
    /**
     * get all comments from a post
     *
     * @param [type] $postId
     * @return Collection
     */
    public function getAllCommentsByPostId($postId): Collection;

    /**
     * get a comment from a post
     *
     * @param [type] $id
     * @return Comment
     */
    public function getComment($id): Comment;

    /**
     * store a comment to record
     *
     * @param array $data
     * @return Comment
     */
    public function create(array $data): Comment;

    /**
     * update comment from record
     *
     * @param [type] $id
     * @param array $data
     * @return boolean
     */
    public function update($id, array $data): bool;

    /**
     * delete a comment from a record
     *
     * @param [type] $id
     * @return boolean|null
     */
    public function delete($id): ?bool;
}
