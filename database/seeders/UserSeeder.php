<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrator = User::updateOrCreate([
            'first_name' => 'RnR',
            'last_name' => 'Admin',
            'phone' => '07123456789',
            'email' => 'admin@rnr.co.tz',
        ], [
            'password' => Hash::make('rnr@2023'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
