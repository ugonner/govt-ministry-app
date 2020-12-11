<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcetypeColumnOnGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleryfile', function (Blueprint $table) {
            $table->unsignedInteger('resourcetype');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('galleryfile', function (Blueprint $table) {
            $table->dropColumn('resourcetype');

        });
    }
}
