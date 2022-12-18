<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorContinuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_continues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_id');
            $table->boolean('hepatitis');
            $table->boolean('kontak');
            $table->boolean('transfusi');
            $table->boolean('tato');
            $table->boolean('gigi');
            $table->boolean('operasi');
            $table->boolean('vaksin');
            $table->boolean('parotis');
            $table->boolean('rabies');
            $table->boolean('alergi');
            $table->boolean('kulit');
            $table->boolean('hamil');
            $table->boolean('susui');
            $table->boolean('obat');
            $table->boolean('alkohol');
            $table->boolean('sifilis');
            $table->boolean('tuberkulosis');
            $table->boolean('epilepsi');
            $table->boolean('vena');
            $table->boolean('thalasemia');
            $table->boolean('hiv');
            $table->boolean('aids');
            $table->boolean('haid');
            $table->boolean('status_donor');
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
        Schema::dropIfExists('donor_continues');
    }
}
