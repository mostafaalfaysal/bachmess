<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->text('memberFirstName');
            $table->text('memberLastName');
            $table->text('memberEmail');
            $table->text('fathersName');
            $table->text('mothersName');
            $table->text('dateOfBirth');
            $table->text('nidNumber');
            $table->text('permanentAddress');
            $table->text('phoneNumber');
            $table->text('numberOfSeat');
            $table->text('memberPassword');
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
        Schema::dropIfExists('members');
    }
};
