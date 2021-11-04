<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf__books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ISBN_Number');
            $table->unsignedBigInteger('publish_id');
            $table->foreign('publish_id')->references('id')->on('publishers')->onDelete('cascade');
            $table->string('author_name');
            $table->date('published_date');
            $table->string('edition');
            $table->string('Details',400);
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
        Schema::dropIfExists('pdf__books');
    }
}
