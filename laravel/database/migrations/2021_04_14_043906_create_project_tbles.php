<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTbles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tbles', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description')->nullable());
                $table->unsignedinteger('priority')->nullable();
                $table->unsignedinteger('status')->default(100);
                $table->foreignId('creator')->nullable();
                $table->timestamps('due_date')->nullable();
                $table->timestamps('completed_date')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_tbles');
    }
}
