<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration {
  public function up() {
    Schema::create('members', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_job')->unsigned();
      $table->integer('id_religion')->unsigned();
      $table->integer('id_region')->unsigned();
      $table->string('nik');
      $table->string('name');
      $table->string('gender');
      $table->string('address');
      $table->string('education');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_job')->references('id')->on('jobs')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_religion')->references('id')->on('religions')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_region')->references('id')->on('provinces')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('members');
  }
}
