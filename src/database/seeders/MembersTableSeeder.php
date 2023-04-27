<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        DB::table('members')->insert(
            [
            [
            'name'=>'山田',
            'telephone'=>'xxxx-xxxxx',
            'email'=>'yamada@example.com',
            'created_at'=>now(),
            'updated_at'=>now(),
            ],

            ]
        );
    }
}
