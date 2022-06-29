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
        schema::create('tickets',function(Blueprint $table){
            $table->bigIncrements('ticket_id');
            $table->tinyinteger('Status');
            $table->date('Date_start');
            $table->date('Date_answerf');
            $table->boolean('RQ_boolean')->nullable();
            $table->text('Q_text');
            $table->text('A_text');
            $table->tinyinteger('k_form');
            $table->string('subject',50);
            $table->biginteger('personal_id')->references('personal_id')->on('person')->onDelete('cascade')->uniqe();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("tickets");
    }
};
