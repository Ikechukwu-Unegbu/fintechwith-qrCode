<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('website')->nullable();
            $table->string('company_name');
            $table->string('product_name');
            $table->string('product_url')->nullable();
            $table->string('callback_url');
            $table->string('qrcode_path')->nullable();
            $table->float('amount', 8,4);
            $table->tinyInteger('status')->default(1)->nullable();
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
        Schema::dropIfExists('qrcodes');
    }
}
