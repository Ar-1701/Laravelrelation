<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class OneToMany extends Controller
{
    public function oneToMany()
    {
        $data['post'] = Author::find(3);
        // $data['author'] = Post::find(5)->author;
        $data['author'] = Post::find(1);
        // echo "<pre>";
        // print_r($data['post']->post);
        // print_r($mobile);
        // echo "</pre>";
        foreach ($data['post']->post as $key => $value) {
            echo $value->title . '-' . $value->postCat . ' - ' . $value->author_id . "<br>";
        }
        return view('oneToMany');
    }
    public function add_author()
    {
        $author = new Author();
        $author->name = "Anshika";
        $author->password = "Anshika12";
        $author->save();
    }
    public function add_post()
    {
        $author = Author::find(3);
        $post = new Post();
        $post->title = "Post 5";
        $post->postCat = "Cat 5";
        $author->post()->save($post);
    }
}
