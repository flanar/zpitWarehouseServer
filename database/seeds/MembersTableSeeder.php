<?php

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
        DB::table('members')->insert([
            'member_name' => 'Kamil',
            'member_surname' => 'Taneczna',
            'member_email' => 'kamil@taneczna.pl',
            'group_id' => 1
        ]);

        DB::table('members')->insert([
            'member_name' => 'Julia',
            'member_surname' => 'Wokalna',
            'member_email' => 'julia@wokalna.pl',
            'group_id' => 2
        ]);

        DB::table('members')->insert([
            'member_name' => 'Adrianna',
            'member_surname' => 'Mieszana',
            'member_email' => 'adrianna@mieszana.pl',
            'group_id' => 3
        ]);

        DB::table('members')->insert([
            'member_name' => 'Adam',
            'member_surname' => 'Kapela',
            'member_email' => 'adam@kapela.pl',
            'group_id' => 4
        ]);

        DB::table('members')->insert([
            'member_name' => 'Rafał',
            'member_surname' => 'Kapela',
            'group_id' => 4
        ]);
    }
}
