<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tasks;
use App\Models\User;
class TaskExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_exampleTask()
    {
        $task = Tasks::factory() -> create();
        $task ->description = "Hello IS373";
        $task -> save();
        $user = User::find(1);
        $user -> name = "Noura Hedhli";
        $user -> save();

        $tasks= $user->tasks;

        dd($tasks);


    }
}
