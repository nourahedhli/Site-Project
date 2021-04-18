<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Post;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;


class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        /** u cant output this to the web this is only for unit test    */
        $value1 = 2;
        $value2 = 3;
        $value3 = $value1 + $value2 ;

        $this->assertEquals( 5 , $value3);
        /** make 5 fake users */

        $users = User::factory()->count(3)->create();

        $users->title = 'Test Title';
        $users->save();
        /**  get one user */

        $user = User::find(1);
        //dd($users);
        $user-> Name = 'NOURA';
        $user-> save();
        $this->assertEquals('NOURA',$user-> Name);
        $post =$user->post;
        dd($post);
    }
}
