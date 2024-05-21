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
        Schema::create('milestone', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('cost', 10, 2);
            $table->text('description');
            $table->timestamps();
        });
        Schema::create('milestone_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('milestone_image_id');
            $table->string('url');
            $table->text('comment');
            $table->timestamps();
    
            $table->foreign('milestone_image_id')->references('id')->on('milestones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
