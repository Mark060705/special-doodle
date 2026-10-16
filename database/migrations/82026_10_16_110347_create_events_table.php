<?php

use App\Models\Event;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('time');
            $table->string('address');
            $table->foreignId('trader_id')->constrained();
            $table->timestamps();
        });
        Event::create([
            'name' => "Party",
            'time' => "2014-09-22 15:41:09",
            'address' => "933 Wehner Oval Everardoborough, VT 43824-2313",
            'trader_id' => '1'

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
