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
            $table->string('tanggal_SPDP')->nullable();
            $table->string('tanggal_P17')->nullable();
            $table->string('tanggal_tahap_1')->nullable();
            $table->string('tanggal_P18')->nullable();
            $table->string('tanggal_P19')->nullable();
            $table->string('tanggal_P20')->nullable();
            $table->string('tanggal_P21')->nullable();
            $table->string('tanggal_P21A')->nullable();
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
