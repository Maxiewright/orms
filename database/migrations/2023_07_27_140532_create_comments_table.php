<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->morphs('commentable');
            $table->foreignId('user_id')->constrained();
            $table->text('body');
            $table->foreignId('parent_id')->nullable()->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
