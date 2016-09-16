<?php

use Illuminate\Database\Seeder;

class lop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('lop')->insert(['tenlop' => 'CNTTK11A']);
		DB::table('lop')->insert(['tenlop' => 'CNTTK11B']);
		DB::table('lop')->insert(['tenlop' => 'CNTTK11C']);
		DB::table('lop')->insert(['tenlop' => 'KTPMK11A']);
    }
}
