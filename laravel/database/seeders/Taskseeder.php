<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Taskseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(table:'users')->insert([
            'title'=>Str::random(50),
            'description'=>Str::random(250),
            'user_id'=>User::inRandomOrder()->first()->id,
            'task_id'=>Task::inRandomOrder()->first()->id,
            'team_id'=>NULL,
            'project_id'=>1,
            'priority'=>Null,
            'status'=>NULL,
            'creator'=>1,
            'due_date'=>NULL,
            'completed_date'=>NULL,
        ]);

    }
}
