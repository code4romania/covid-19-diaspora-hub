<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomaticMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomatic_missions', function (Blueprint $table) {
            $table->id();

            $table->string('city');
            $table->text('address')->nullable();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diplomatic_missions');
    }
}
