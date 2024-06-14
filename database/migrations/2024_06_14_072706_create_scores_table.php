<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('このスコアの所有者');
            $table->foreign('user_id')->references('id')->on('users');//外部キー制約
            $table->bigInteger('max_score')->default(0);
            $table->boolean('kokusi')->default(false);
            $table->boolean('su_anko')->default(false);
            $table->boolean('daisangen')->default(false);
            $table->boolean('daisu_si')->default(false);
            $table->boolean('shousu_si')->default(false);
            $table->boolean('chu_renputou')->default(false);
            $table->boolean('ryu_i_sou')->default(false);
            $table->boolean('tu_i_sou')->default(false);
            $table->boolean('tinrountou')->default(false);
            $table->boolean('su_kantu')->default(false);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->collation = 'utf8mb4_bin';
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scores', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('scores');
    }
}
