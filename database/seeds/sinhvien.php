<?php

use Illuminate\Database\Seeder;

class sinhvien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		DB::table('sinhvien')->insert(['masv' => 'DTC125D4802010077', 'hoten' => 'Bùi văn Giáp','ngaysinh' => '1994-04-15']);

    }
}
