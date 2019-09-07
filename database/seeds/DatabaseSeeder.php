<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '782872435', 
            'name'          => 'Fernando',
            'phone'         => '7676738386',
            'birth'         => '1990/05/09',
            'gender'        => 'M',
            'notes'         => '',
            'email'         => 'fernando@gmail.com',
            'password'      => env('PASSWORD_HASH') ? bcrypt('123456'): '123456',
            'status'        => '',
            'permission'    => '',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
