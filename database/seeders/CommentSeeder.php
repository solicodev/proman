<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $tasks = Task::all();

        foreach ($tasks as $task) {
            Comment::factory()->count(rand(2, 6))->create([
                'comments_id' => $task->id,
                'comments_type' => \App\Models\Task::class,
                'user_id' => $users->random()->id,
            ]);

        }
    }
}
