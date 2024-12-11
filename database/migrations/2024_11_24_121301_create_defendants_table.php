<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefendantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defendants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('crime_type_id')->constrained('crime_types');
            $table->string('peneliti');
            $table->string('tanggal_SPDP');
            $table->string('tanggal_P17');
            $table->string('tanggal_tahap_1');
            $table->string('tanggal_P18');
            $table->string('tanggal_P20');
            $table->string('tanggal_P21');
            $table->string('tanggal_P21A');
            $table->enum('status', ['pra-penuntutan','penuntutan'])->default('pra-penuntutan');
            $table->softDeletes();
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
        Schema::dropIfExists('defendants');
    }
}
