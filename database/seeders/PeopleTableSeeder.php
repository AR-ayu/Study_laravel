<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        $param =[
            'name'=>'seeder',
            'mail'=>'data',
            'age'=>'1',
        ];
        DB::table('people')->insert($param);
        
        $param =[
            'name'=>'seeder',
            'mail'=>'data',
            'age'=>'2',
        ];
        DB::table('people')->insert($param);

        $param =[
            'name'=>'seeder',
            'mail'=>'data',
            'age'=>'3',
        ];
        DB::table('people')->insert($param);
    }
}
