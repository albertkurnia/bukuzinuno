<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTpLirikTable extends Migration
{
    private $table = "tp_lirik";
    private $table_reff = "tp_lagu";

    public function up()
    {
         Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id_lirik');
            $table->integer('nomor');
            $table->integer('urut_ayat');
            $table->text('lirik', 255);
            $table->boolean('row_status')->default(true);
            $table->timestamp('created_at');
            $table->string('created_by', 25);
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by', 25)->nullable();
            $table->foreign('nomor')->references('nomor')->on($this->table_reff);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->table);
    }
}
