<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('uploadables');
        Schema::create('uploadables', function (Blueprint $table) {
            $table->id();
            $table->integer('upload_id')->unsigned()->nullable()->default(12);
            $table->integer('uploadable_id')->unsigned()->nullable()->default(12);
            $table->string('uploadable_type', 250)->nullable();
            
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
        Schema::dropIfExists('uploadables');
    }
}
