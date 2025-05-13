<?php

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
        $user = new \App\Models\User();
        $user->name = 'Jasper';
        $user->email = 'jasper@dashed.nl';
        $user->password = \Illuminate\Support\Facades\Hash::make('123123');
        $user->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_user');
    }
};
