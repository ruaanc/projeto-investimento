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
            'cpf'           => '78287272', 
            'name'          => 'Antônio',
            'phone'         => '7676738386',
            'birth'         => '1990/05/09',
            'gender'        => 'M',
            'notes'         => '',
            'email'         => 'antonio@gmail.com',
            'password'      => bcrypt('123456'),
            'status'        => '',
            'permission'    => '',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
