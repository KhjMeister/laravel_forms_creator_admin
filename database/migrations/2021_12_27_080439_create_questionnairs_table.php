<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnairs', function (Blueprint $table) {
            $table->id();
            $table->string('qname');
            $table->integer('c_id');
            // $table->foreignId('c_id')->constrained('categories');
            // $table->foreignId('u_id')->constrained('users');
            $table->integer('u_id');
            $table->integer('qstate')->default(0);
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
        Schema::dropIfExists('questionnairs');
    }
}
