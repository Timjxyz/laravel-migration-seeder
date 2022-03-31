<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name', 50)->nullable();
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('travelers');
            $table->decimal('price', 8, 2);
            $table->string('where_from', 50);
            $table->string('where_to', 50);
            $table->date('departure');
            $table->date('arrival');
            $table->string('hotel_name',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
