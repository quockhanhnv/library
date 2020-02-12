<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicerooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('practicerooms_name', 100);
            $table->tinyInteger('practicerooms_computer_numbers');
            $table->bigInteger('subjects_created_by')->nullable();
            $table->bigInteger('subjects_updated_by')->nullable();
            $table->boolean('active')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('practicerooms');
    }
}
