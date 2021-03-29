<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAColumnTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswas', function(Blueprint $table) {
            $table->string('e-mail')->after('no_handphone')->nullable()->unique();
            $table->date('tanggal_lahir')->after('e-mail')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function(Blueprint $table){
            $table->dropColumn('e-mail');
            $table->dropColumn('tanggal_lahir');
        });
    }
}
