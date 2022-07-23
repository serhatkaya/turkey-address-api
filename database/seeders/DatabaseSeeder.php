<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Eloquent;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Eloquent::unguard();

        $this->command->info('Seeding database, this may take while.');
        $path = 'app/dev/address.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Completed');
    }
}