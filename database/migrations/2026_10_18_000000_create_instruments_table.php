<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instruments', function (Blueprint $table) {
            $table->id();                           // id
            $table->string('name');                 // name
            $table->string('brand');                // brand
            $table->unsignedInteger('price');       // price (Rupiah)
            $table->text('description');            // description
            $table->string('image');                // image (nama file di public/assets/images/)
            $table->string('type');                 // type (Senar, Keyboard, Perkusi, Tiup, Gesek)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instruments');
    }
};
