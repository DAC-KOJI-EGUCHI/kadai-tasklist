<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(23);
        for($j=0; $j < 100; $j++){
            $user->tasks()->create([
                'content' => 'task' . $j,
                'status' => 'status' . $j
            ]);
        }
    }
}