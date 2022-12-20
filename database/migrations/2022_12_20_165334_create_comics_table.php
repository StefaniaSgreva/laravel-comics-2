<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->string('image')->nullable()->default('http://www.multiversitycomics.com/wp-content/themes/mvc/images/timthumb.php?src=http://multiversitystatic.s3.amazonaws.com/uploads/2013/10/DC-Logo.png&q=95&w=288&zc=1&a=t');
            $table->string('price', 10);
            $table->string('series', 100);
            $table->date('sale_date')->nullable();
            $table->string('type', 50);
            $table->string('artist', 100);
            $table->string('writer', 100);
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
        Schema::dropIfExists('comics');
    }
};