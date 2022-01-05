<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal_types', function (Blueprint $table) {
            $table->id();
            $table->string('htext');
            $table->text('hbigtext');
            $table->integer('n_id');
            // $table->foreignId('n_id')->constrained('questions')
            $table->integer('ntype');
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
        Schema::dropIfExists('normal_types');
    }
}
