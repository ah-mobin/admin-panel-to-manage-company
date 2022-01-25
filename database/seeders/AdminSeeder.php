<?php

namespace Database\Seeders;

use App\Constants\UserTypeConstants;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::whereEmail('admin@admin.com');
        if($user->first()){
            $user->delete();
        }
        User::create([
            'user_type_id' => UserTypeConstants::ADMIN,
            'first_name' => 'Administrative',
            'last_name' => 'User',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => 'password'
        ]);
    }
}
