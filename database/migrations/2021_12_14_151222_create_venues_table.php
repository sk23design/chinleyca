<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('cover_image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('intro')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('town')->nullable();
            $table->string('county')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('capacity')->default(0);
            $table->decimal('price')->default(0);
            $table->boolean('enabled')->default(true);
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
        Schema::dropIfExists('venues');
    }
}
