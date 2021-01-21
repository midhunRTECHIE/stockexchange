<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAdminuserIdInPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stockusers', function (Blueprint $table) {
            $table->renameColumn('adminUserId', 'stockUserId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stockusers', function (Blueprint $table) {
            $table->renameColumn('stockUserId', 'adminUserId');
        });
    }
}
