<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject', 100);
            $table->text('description')->nullable(true);
            $table->text('remark')->nullable(true);
            $table->date('start_date');
            $table->date('expected_end_date');
            $table->date('end_date')->nullable(true);
            $table->boolean('active')->default(true);
            $table->unsignedInteger('requester_id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('status_id');
            $table->unsignedInteger('technician_id');
            $table->timestamps();

            $table->foreign('requester_id')->references('id')->on('requesters');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('technician_id')->references('id')->on('technicians');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
