<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('errors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('meaning');
            $table->string('solution');
            $table->timestamps();
        });
        DB::table('errors')->insert(
            array(
                'name' => 'Error 404',
                'company'=>"Internet",
                'meaning'=>"the webpage you're trying to reach can't be found.",
                'solution'=>'Try another page.'
            )
        );
        

        DB::table('errors')->insert(
            array(
                'name' => 'Error tvq-details-edp-100',
                'company'=>"Netflix",
                'meaning'=>"There might be a problem with old data stored in your device.",
                'solution'=>'Restart your device and try to update the Netflix App.'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('errors');
    }
}
