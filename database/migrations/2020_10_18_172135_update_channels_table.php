<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateChannelsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('channels', function (Blueprint $table) {
            $table->renameColumn('about', 'description')->nullable()->change(); # serve un package aggiuntivo: composer require doctrine/dbal
            $table->string('notifications')->nullable()->change();
            $table->string('email')->after('about')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('channels', function (Blueprint $table) {
            $table->dropColumn('email')->nullable();
        });
    }
}
