<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumVitaeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_vitae', function (Blueprint $table) {
            $table->id();
            $table->string('contact_date');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birth_year');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('other_email');
            $table->string('skype');
            $table->string('linked_in');
            $table->string('facebook');
            $table->string('position');
            $table->string('programing_language');
            $table->string('company');
            $table->integer('english');
            $table->smallInteger('sending_email');
            $table->smallInteger('inbox');
            $table->smallInteger('skype_chat');
            $table->smallInteger('call');
            $table->smallInteger('receive_cv');
            $table->smallInteger('pv_one');
            $table->smallInteger('pv_two');
            $table->foreignId('source_id')->constrained('source');
            $table->foreignId('status_id')->constrained('status');
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
        Schema::dropIfExists('curriculum_vitae');
    }
}
