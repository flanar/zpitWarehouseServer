<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'group_name' => 'taneczna'
        ]);

        DB::table('groups')->insert([
            'group_name' => 'wokalna'
        ]);

        DB::table('groups')->insert([
            'group_name' => 'mieszana'
        ]);

        DB::table('groups')->insert([
            'group_name' => 'kapela'
        ]);

        DB::table('groups')->insert([
            'group_name' => '"Be"'
        ]);
    }
}
