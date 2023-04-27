<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\MembersTableSeeder;
use Database\Seeders\DatabaseSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(MembersTableSeeder::class);
    }
}


class MembersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => '山田',
                'telephone' => 'xxxx-xxxxx',
            ],
            [
                'name' => '鈴木',
                'telephone' => 'yyyy-yyyyy',
            ],
        ]);
    }
}
