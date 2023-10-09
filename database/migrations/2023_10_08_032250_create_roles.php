<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $roles1 = Role::create(['name' => 'admin']);
        $roles2 = Role::create(['name' => 'usuario']);
        $use = User::find(1);
        $use->assignRole($roles1);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
