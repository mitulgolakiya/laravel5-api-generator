<?php

namespace App\Libraries\Repositories;


use App\Models\Post;

class PostRepository
{

	/**
	 * Returns all Posts
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Post::all();
	}

	/**
	 * Stores Post into database
	 *
	 * @param array $input
	 *
	 * @return Post
	 */
	public function store($input)
	{
		return Post::create($input);
	}

	/**
	 * Find Post by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Post
	 */
	public function findPostById($id)
	{
		return Post::find($id);
	}

	/**
	 * Updates Post into database
	 *
	 * @param Post $post
	 * @param array $input
	 *
	 * @return Post
	 */
	public function update($post, $input)
	{
		$post->fill($input);
		$post->save();

		return $post;
	}
}