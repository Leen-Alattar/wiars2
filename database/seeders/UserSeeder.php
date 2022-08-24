<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        	id	name	email	email_verified_at	date_of_birth	national_num	password	remember_token	role_id	created_at	updated_at	*/ 
        User::create([
            'name'=>'ahmad',
            'email'=>'ahmad@gmail.com',
            'date_of_birth'=>'2000/08/01',
            'national_num'=>1212424,
            'password'=>Hash::make('ahmad12345$'),
            'role_id'=>1,
            'is_vaccine'=>1



        ]);
    }
}
