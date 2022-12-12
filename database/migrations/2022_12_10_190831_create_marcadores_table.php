<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateMarcadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcadores', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('lat');
            $table->text('lng');
            $table->text('category');
            $table->longText('address');
            $table->longText('address2')->nullable();
            $table->text('city');
            $table->text('state');
            $table->text('postal');
            $table->text('phone');
            $table->text('phone2')->nullable();
            $table->text('linkmap');
            $table->text('web')->nullable();
            $table->text('hours1')->nullable();
            $table->text('hours2')->nullable();
            $table->text('hours3')->nullable();
            $table->text('featured')->nullable();
            $table->text('features')->nullable();
            $table->date('date');
            $table->softDeletes();
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
        Schema::dropIfExists('marcadores');
    }
}
