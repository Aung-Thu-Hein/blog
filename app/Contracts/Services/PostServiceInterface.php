<?php

namespace App\Contracts\Services;

use App\Http\Resources\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface PostServiceInterface
{
    /**
     * get all posts
     *
     * @return void
     */
    public function getAllPosts();

    /**
     * get post by its ID
     *
     * @param [type] $id
     * @return void
     */
    public function getPost($id);

    /**
     * create a post
     *
     * @param Request $request
     * @return void
     */
    public function createPost(Request $request);

    /**
     * update a post by ID
     *
     * @param [type] $id
     * @param Request $request
     * @return void
     */
    public function updatePost($id, Request $request);

    /**
     * delete post by its ID
     *
     * @param [type] $id
     * @return void
     */
    public function deletePost($id);
}
