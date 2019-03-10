<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->string('forecast_message')->comment('预测出的信息')->nullable();
            $table->string('implied_information')->comment('暗示的信息')->nullable();
            $table->string('poetry_cloud')->comment('诗云')->nullable();
            $table->integer('lucky_star')->comment('幸运星')->nullable();
            $table->integer('personality_coefficient')->comment('个性系数')->nullable();
            $table->string('personality_type')->comment('主人性格类型')->nullable();
            $table->string('performance')->comment('具体表现')->nullable();
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
        Schema::dropIfExists('datas');
        
    }
}
