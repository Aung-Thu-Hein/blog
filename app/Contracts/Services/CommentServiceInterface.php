<?php

namespace App\Contracts\Services;

use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

interface CommentServiceInterface
{
    /**
     * get all comments from a post
     *
     * @param [type] $postId
     * @return ResourceCollection
     */
    public function getAllCommentsByPostId($postId): ResourceCollection;

    /**
     * get a comment
     *
     * @param [type] $id
     * @return CommentResource
     */
    public function getComment($id): CommentResource;

    /**
     * create a post's comment
     *
     * @param Request $request
     * @return CommentResource
     */
    public function createComment(Request $request): CommentResource;

    /**
     * update a comment
     *
     * @param [type] $id
     * @param Request $request
     * @return boolean
     */
    public function updateComment($id, Request $request): bool;

    /**
     * delet a comment
     *
     * @param [type] $id
     * @return boolean|null
     */
    public function deleteComment($id): ?bool;
}
