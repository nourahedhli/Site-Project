<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;

class PostExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_examplePost()
    {
        $post = Post::factory() -> create();
        $post ->title= "Hello IS373";
        $post -> save();

        $user = User::find(1);

        $user -> name = "Noura Hedhli";
        $user -> save();
        $this->assertEquals("Noura Hedhli",$user->name);
        $posts= $user->posts;

        //dd($posts);
    }
}
