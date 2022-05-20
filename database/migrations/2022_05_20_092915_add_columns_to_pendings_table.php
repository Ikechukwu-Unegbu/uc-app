<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendings', function (Blueprint $table) {
            // $table->tinyInteger('recieved')->default(0);
            $table->string('package_name')->nullable();
            $table->tinyInteger('offer_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendings', function (Blueprint $table) {
            //
        });
    }
};
