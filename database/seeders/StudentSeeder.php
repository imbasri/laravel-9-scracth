<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Yusuf', 'score' => 80,'teacher_id' => 1],
            ['id' => 2, 'name' => 'Danang', 'score' => 88,'teacher_id' => 1],
            ['id' => 3, 'name' => 'Wahyu', 'score' => 71,'teacher_id' => 1],
        ];
        //insert Database Seeder
        DB::table('students')->insert($data);
    }
}
