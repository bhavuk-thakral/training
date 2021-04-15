<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('team_id')->nullable();
            $table->foreignId('task_id')->nullable();
            $table->foreignId('project_id');
            $table->unsignedinteger('priority')->nullable();
            $table->unsignedinteger('status')->default(value,100);
            $table->foreignId('creator')->nullable();
            $table->timestamps('due_date')->nullable();
            $table->timestamps('completed_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
