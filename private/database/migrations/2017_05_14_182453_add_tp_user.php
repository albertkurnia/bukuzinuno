<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTpUser extends Migration
{
    
    private $table = 'tp_user';

    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('email', 100);
            $table->string('password', 255);
            $table->integer('role');
            $table->boolean('row_status')->default(true);
            $table->timestamp('created_at');
            $table->string('created_by', 25);
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by', 25)->nullable();
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
