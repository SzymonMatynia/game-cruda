<?php

use Illuminate\Database\Seeder;
use App\Game;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         factory(Game::class, 20)->create();
    }
}
