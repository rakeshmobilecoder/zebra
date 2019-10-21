<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('business_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('family_name');
            $table->string('gender');
            $table->date('place_of_birth');
            $table->string('phone_number');
            $table->string('fixed_phone');
            $table->string('address');
            $table->string('city');
            $table->integer('postal_zip_code');
            $table->string('province');
            $table->string('municipality');
            $table->string('codeice_email');
            $table->string('fiscal_code');
            $table->string('id_type');            
            $table->integer('id_number');
            $table->integer('vat_id');
            $table->string('nation');            
            $table->date('date_of_issue');            
            $table->date('expried_date');            
            $table->string('place_of_issue');
            $table->string('picture');
            $table->string('id_picture_front');
            $table->string('id_picture_back');
            $table->string('signature_picture');
            $table->string('document_picture_first');            
            $table->string('document_picture_second'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('user_details');
    }
}
