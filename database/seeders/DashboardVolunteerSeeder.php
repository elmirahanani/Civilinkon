<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DashboardVolunteer;

class DashboardVolunteerSeeder extends Seeder
{
    public function run(): void
    {
        $volunteers = [
            [
                'name' => 'Andi Pratama',
                'place' => 'Asteriapple Park',
                'category' => 'Clean-up',
                'amount' => 10,
                'status' => 'active',
            ],
            [
                'name' => 'Budi Santoso',
                'place' => 'Central Park',
                'category' => 'Sorting',
                'amount' => 2,
                'status' => 'available',
            ],
            [
                'name' => 'Cynthia Dewi',
                'place' => 'Sagara Beach',
                'category' => 'Clean-up',
                'amount' => 9,
                'status' => 'active',
            ],
            [
                'name' => 'Ezra Darrel',
                'place' => 'River Road',
                'category' => 'Clean-up',
                'amount' => 4,
                'status' => 'available',
            ],
            [
                'name' => 'Ryan Mahadewa',
                'place' => 'Blok C Housing',
                'category' => 'Reuse',
                'amount' => 12,
                'status' => 'active',
            ],
            [
                'name' => 'Mita Srindina',
                'place' => 'Greenovate Center',
                'category' => 'Reuse',
                'amount' => 5,
                'status' => 'available',
            ],
            [
                'name' => 'Caleb Adiputra',
                'place' => 'Transfer Station 1',
                'category' => 'Sorting',
                'amount' => 10,
                'status' => 'active',
            ],
            [
                'name' => 'Mutiara Athaya',
                'place' => 'Economic Hall',
                'category' => 'Clean-up',
                'amount' => 21,
                'status' => 'active',
            ],
        ];

        foreach ($volunteers as $volunteer) {
            DashboardVolunteer::updateOrCreate(
                ['name' => $volunteer['name']],
                $volunteer
            );
        }
    }
}
