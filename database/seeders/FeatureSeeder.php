<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            [
                'icon' => 'fa fa-heartbeat',
                'title' => 'Emergency Care',
                'description' => '24/7 emergency medical services with expert staff.'
            ],
            [
                'icon' => 'fa fa-stethoscope',
                'title' => 'Regular Checkup',
                'description' => 'Comprehensive health checkups for all ages.'
            ],
            [
                'icon' => 'fa fa-user-md',
                'title' => 'Expert Doctors',
                'description' => 'Experienced specialists across all departments.'
            ]
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
