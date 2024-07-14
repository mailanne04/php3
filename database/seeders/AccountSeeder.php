<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::first();
        Account::create([
            'name' => Str::random(10),
            'password' => Hash::make(1),
            'email' => Str::random(10) . '@gmail.com',
            'address' => Str::random(10),
            'phone' => Str::random(10),
            'role_id' => $role->id,
        ]);
    }
}
