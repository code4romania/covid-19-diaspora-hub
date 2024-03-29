<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryEntityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_entity', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('entity_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('category_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_entity');
    }
}
