<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_criterias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_continue_id');
            $table->float('berat_badan');
            $table->float('suhu');
            $table->float('sistole');
            $table->float('diastole');
            $table->integer('nadi');
            $table->float('haemoglobin');
            $table->foreignId('user_id');
            $table->boolean('status_periksa');
            $table->text('keterangan_periksa');
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
        Schema::dropIfExists('donor_criterias');
    }
}
