<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('sub_id')->nullable();
            $table->string('donnors');
            $table->string('amount');
            $table->string('duration_number');
            $table->string('duration');
            $table->string('emi');
            $table->string('url')->nullable();
            $table->integer('status')->default('1');
            $table->timestamps();
        });
        Schema::rename('Subscriptions', 'ngo_subscriptions');
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
}
