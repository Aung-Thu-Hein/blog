<?php

namespace App\Daos;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Post;
use App\Contracts\Daos\PostDaoInterface;

class PostDao implements PostDaoInterface
{
    public function all(): Collection
    {
        return Post::all();
    }

    public function getPost($id): Post
    {
        return Post::findOrFail($id);
    }

    public function create(array $data): Post
    {
        return Post::create($data);
    }

    public function update($id, array $data): bool
    {
        $post = Post::findOrFail($id);

        return $post->update($data);
    }

    public function delete($id): bool|null
    {
        $post = Post::findOrFail($id);

        return $post->delete();
    }
}
