<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class AddUserToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->after('is_focus');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->after('description');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });

        // Artisan::call('db:seed', [
        //     '--class' => 'update_posts_galery_seeder',
        //     '--force' => true
        // ]);
        Artisan::call('db:seed', [
            '--class' => 'webSeeder',
            '--force' => true
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('table', function (Blueprint $table) {
        //     //
        // });
    }
}
