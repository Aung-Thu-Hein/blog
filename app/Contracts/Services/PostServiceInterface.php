<?php

namespace App\Contracts\Services;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\PostResource;

interface PostServiceInterface
{
    /**
     * get all posts
     *
     * @return void
     */
    public function getAllPosts(): ResourceCollection;

    /**
     * get post by its ID
     *
     * @param [type] $id
     * @return PostResource
     */
    public function getPost($id): PostResource;

    /**
     * create a post
     *
     * @param Request $request
     * @return PostResource
     */
    public function createPost(Request $request): PostResource;

    /**
     * update a post by ID
     *
     * @param [type] $id
     * @param Request $request
     * @return bool
     */
    public function updatePost($id, Request $request): bool;

    /**
     * delete post by its ID
     *
     * @param [type] $id
     * @return bool|null
     */
    public function deletePost($id): bool|null;
}
