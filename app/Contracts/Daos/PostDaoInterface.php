<?php

namespace App\Contracts\Daos;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

interface PostDaoInterface
{
    /**
     * get all post records
     *
     * @return Collection
     */
    public function all(): Collection;

    /**
     * get post by its ID
     *
     * @param [type] $id
     * @return Post
     */
    public function getPost($id): Post;

    /**
     * store a post to post record
     *
     * @param array $data
     * @return Post
     */
    public function create(array $data): Post;

    /**
     * update a post from a record
     *
     * @param [type] $id
     * @param array $data
     * @return boolean
     */
    public function update($id, array $data): bool;

    /**
     * delete a post from a record
     *
     * @param [type] $id
     * @return boolean|null
     */
    public function delete($id): bool|null;
}
