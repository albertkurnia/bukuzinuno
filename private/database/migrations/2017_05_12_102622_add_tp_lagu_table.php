<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTpLaguTable extends Migration
{
    private $table = "tp_lagu";

    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->integer('nomor');
            $table->string('judul', 255);
            $table->string('lala_note', 255)->nullable();;
            $table->string('info_nada', 255)->nullable();;
            $table->boolean('row_status')->default(true);
            $table->timestamp('created_at');
            $table->string('created_by', 25);
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by', 25)->nullable();
            $table->primary('nomor');
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
