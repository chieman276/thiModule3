<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new Staff();
        $staff->staffGroup = 'Quản Trị hệ thống ';
        $staff->name = ' Nguyễn Vũ Tiến';
        $staff->birthday = '1994/04/05';
        $staff->gender = 'Nam';
        $staff->phone = '0179687162';
        $staff->cmnd = '196584895';
        $staff->email = 'tien@gmail.com';
        $staff->address = '133-Trần Hưng Đạo';
        $staff->save();

        $staff = new Staff();
        $staff->staffGroup = 'Quản lý nhân sự';
        $staff->name = ' Nguyễn Phương Anh';
        $staff->birthday = '1994/04/05';
        $staff->gender = 'Nữ';
        $staff->phone = '0179687162';
        $staff->cmnd = '196584895';
        $staff->email = 'dinh@gmail.com';
        $staff->address = '133-Trần Hưng Đạo';
        $staff->save();

        $staff = new Staff();
        $staff->staffGroup = 'Lễ Tân';
        $staff->name = ' Lê Văn Định';
        $staff->birthday = '1994/04/05';
        $staff->gender = 'Nam';
        $staff->phone = '0179687162';
        $staff->cmnd = '196584895';
        $staff->email = 'dinh@gmail.com';
        $staff->address = '133-Trần Hưng Đạo';
        $staff->save();

        $staff = new Staff();
        $staff->staffGroup = 'Quản lý phòng';
        $staff->name = ' Bùi Thị Nhung';
        $staff->birthday = '1994/04/05';
        $staff->gender = 'Nữ';
        $staff->phone = '0179687162';
        $staff->cmnd = '196584895';
        $staff->email = 'dinh@gmail.com';
        $staff->address = '133-Trần Hưng Đạo';
        $staff->save();


        $staff = new Staff();
        $staff->staffGroup = 'Quản lý dịch vụ';
        $staff->name = ' Nguyễn Đức Anh';
        $staff->birthday = '1994/04/05';
        $staff->gender = 'Nam';
        $staff->phone = '0179687162';
        $staff->cmnd = '196584895';
        $staff->email = 'dinh@gmail.com';
        $staff->address = '133-Trần Hưng Đạo';
        $staff->save();
    }
}
