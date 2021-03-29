<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->date('date_of_birth');
            $table->integer('license_number');
            $table->text('biography');
            $table->string('author_image',2048);
            $table->timestamps();

            $table->foreign('author_id')
                  ->references('id')
                  ->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_details');
    }
}
