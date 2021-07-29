<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('description');
            $table->string('uri_image');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->default(new Expression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //para eliminar esta tabla primero se elimina la relacionada
        Schema::dropIfExists('ap_tasks');
        //luego se elimina la otra tabla
        Schema::dropIfExists('ap_categories');
    }
}
