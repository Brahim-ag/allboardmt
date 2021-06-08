<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositions', function (Blueprint $table) {
            $table->id();
            $table->char('source');
            $table->char('focus');
            $table->char('numberAct');
            $table->date('dateSignAct');
            $table->char('typeM');
            $table->char('motif');
            $table->date('duree');
            $table->date('dateEffe');
            $table->char('numberCf');
            $table->date('dateEffeCF');
            $table->char('numberActm');
            $table->date('dateActm');
            $table->date('dateRei');
            $table->date('dateInstal');
            $table->integer('employee_id');
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
        Schema::dropIfExists('disposition');
    }
}