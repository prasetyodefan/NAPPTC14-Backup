<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryNameToNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('category_name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('category_name');
        });
    }
}
