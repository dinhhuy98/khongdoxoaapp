<?php

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
         //$this->call(bode::class);
         //$this->call(cauhoide1::class);
         //$this->call(cautraloide1::class);
         //$this->call(cauhoide2::class);
         //$this->call(cautraloide2::class);
         //$this->call(cauhoide3::class);
         //$this->call(cautraloide3::class);
         $this->call(cauhoide4::class);
         $this->call(cautraloide4::class);
    }
}
