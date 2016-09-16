<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Qllh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('lop', function(Blueprint $table)
        {
            $table->increments('lopid');
			$table->string('tenlop');
            $table->timestamps();
        });
		Schema::create('sinhvien', function(Blueprint $table)
        {
            $table->string('masv');
            $table->string('hoten');
            $table->date('ngaysinh');
            $table->integer('lopid')->nullable()->unsigned();
			$table->foreign('lopid')->references('lopid')->on('lop');
			$table->primary(array('masv'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::drop('sinhvien');
		Schema::drop('lop');
    }
}
