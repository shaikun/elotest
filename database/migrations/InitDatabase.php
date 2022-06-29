<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class InitDatabase implements BaseMigration
{

    public function up()
    {
        Capsule::schema()->create('languages', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->unique();
        });

        Capsule::schema()->create('news', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image')->default("");
            $table->unsignedInteger('language_id');
            $table->timestamps();

            $table->foreign('language_id')->references('id')->on('languages');
        });
    }

    public function down()
    {
        Capsule::schema()->dropIfExists('news');
        Capsule::schema()->dropIfExists('languages');
    }
}

//(new InitDatabase())->up();
// TODO: Make a runner which runs the migrations and keeps track which ones have been ran on the database