<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'id' => 1,
                'type' => 'ADMIN'
            ],
            [
                'id' => 2,
                'type' => 'EMPLOYEE'
            ]
        ];

        foreach($types as $type){
            UserType::create([
                'type_id' => $type['id'],
                'type_name' => $type['type']
            ]);
        }
    }
}
