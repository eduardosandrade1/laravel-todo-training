<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        TodoList::factory(5)->create();

        DB::table("states")->insert([
            [
                'name' => 'Pendente',
            ],
            [
                'name' => 'Concluido'
            ]
        ]);

        Task::factory()->create([
            'state_id' => 1,
            'todo_list_id' => 1
        ]);

        Task::factory()->create([
            'state_id' => 2,
            'todo_list_id' => 2
        ]);

        Task::factory()->create([
            'state_id' => 2,
            'todo_list_id' => 3
        ]);
    }
}
