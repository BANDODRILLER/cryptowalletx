<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->float('invite');
            $table->string('img');
            $table->float('totrevcy');
            $table->float('dyin');
            $table->float('totin');
            $table->float('retrate');
            $table->float('totretrate');
            $table->float('mspr');
            $table->float('pur');
            $table->date('begin');
            $table -> date('end');
            $table->float('available')->nullable();
            $table->float('withdrawn')->nullable();
            $table->float('balance')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }


};
