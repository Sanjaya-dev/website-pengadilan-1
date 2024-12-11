<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnInDefendants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('defendants', function (Blueprint $table) {
            $table->string('tanggal_P19')->nullable()->after('tanggal_P18');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('defendants', function (Blueprint $table) {
            $table->dropColumn('tanggal_P19');
        });
    }
}
