<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Database\Seeder;

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
        Task::factory(5)->create([
            'state_id' => State::factory()->create()
        ]);
    }
}
