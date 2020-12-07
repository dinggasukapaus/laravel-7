<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123456)
        ]);
        //! memberi user'admin' role admin
        $admin->assignRole('admin');
        //! memberi user 'user' role user
        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt(123456)
        ]);
        //! memberi user'admin' role admin
        $admin->assignRole('user');
    }
}
