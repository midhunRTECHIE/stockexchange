<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanystockdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companystockdetails', function (Blueprint $table) {
            $table->bigIncrements('companyStockDetailId');
            $table->string('companyName');
            $table->string('companySymbol')->unique();
            $table->string('marketCap');
            $table->string('currentMarketPrice');
            $table->string('stockPe');
            $table->string('dividentYield');
            $table->string('roce');
            $table->string('roe');
            $table->string('debtToEquity');
            $table->string('eps');
            $table->string('reserves');
            $table->string('debt');
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
        Schema::dropIfExists('companystockdetails');
    }
}
