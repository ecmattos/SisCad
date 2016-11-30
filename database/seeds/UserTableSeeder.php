<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
        [
            [
                'name'              => 'Admin',
                'email'             => 'edu.mattos.1970@gmail.com',
                'password'          => '$2a$10$3RQOq.4o8jA/HbK.St98SeTtLvwHmG1Ul5abD7jtQX/HjX3q4P5vu',
                'user_status_id'    => '3'
            ],
            [
                'name'              => 'Eduardo',
                'email'             => 'ecmattos@ig.com.br',
                'password'          => '$2a$10$3RQOq.4o8jA/HbK.St98SeTtLvwHmG1Ul5abD7jtQX/HjX3q4P5vu',
                'user_status_id'    => '3'
            ]
        ];
    
        foreach ($users as $user)
        {
            \SisCad\User::create($user);
        }
    }
}
