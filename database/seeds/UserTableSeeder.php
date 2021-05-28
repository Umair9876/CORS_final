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
        $admin = new User();
        $admin->name = 'Admin';
        $admin->phoneno = '0312-577';
        $admin->cnic = '3740633895115';
        $admin->email = 'umairansar000@gmail.com';
        $admin->address = 'B-314/2';
        $admin->rank = 'SP';
        $admin->batchno = 'BA17';
        $admin->dateofjoining = '01/10/2021';
        $admin->password = bcrypt('admin000');
        $admin->assignrole('admin');
        $admin->save();
        return redirect()->back();
    }
}
