<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InvestmentGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('investment_id');
            $table->foreign('investment_id')->references('id')->on('investments');
            $table->string('group_name');
            $table->foreign('group_name')->references('group_name')->on('pool_groups');
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
        Schema::table('investment_groups', function (Blueprint $table) {
            Schema::table('investment_groups', function (Blueprint $table) {
                Schema::dropIfExists('investment_groups');
            });
        });
    }
}
