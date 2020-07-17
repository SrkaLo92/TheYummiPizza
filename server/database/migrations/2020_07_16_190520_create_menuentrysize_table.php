<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuentrysizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuentrysize', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menuentry_id');
            $table->foreign('menuentry_id')->references('id')->on('menuentry');
            $table->mediumInteger('size');
            $table->string('unit');
            $table->unsignedFloat('price');
            $table->enum('currency', ['USD', 'EUR']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menuentrysize');
    }
}
