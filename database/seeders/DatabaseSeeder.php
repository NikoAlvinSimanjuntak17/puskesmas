<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\{User, Department, Doctor, Service, News, Job};

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(['email'=>'admin@hospital.test'], [
            'name'=>'Admin',
            'password'=>Hash::make('password'),
            'role'=>'admin'
        ]);

        $dep = Department::firstOrCreate(['name'=>'Cardiology'], ['slug'=>'cardiology','description'=>'Heart care and diagnostics']);
        Department::firstOrCreate(['name'=>'Pediatrics'], ['slug'=>'pediatrics','description'=>'Children health services']);

        Doctor::firstOrCreate(['name'=>'Dr. Aster Kebede'], ['slug'=>'dr-aster-kebede','department_id'=>$dep->id,'specialty'=>'Cardiologist','gender'=>'female']);
        Service::firstOrCreate(['name'=>'ECG'], ['slug'=>'ecg','department_id'=>$dep->id,'summary'=>'Electrocardiogram']);

        News::firstOrCreate(['slug'=>'grand-opening'], ['title'=>'Grand Opening','excerpt'=>'New wing opened','body'=>'Details here','published_at'=>now()]);
        Job::firstOrCreate(['slug'=>'staff-nurse'], ['title'=>'Staff Nurse','department_id'=>$dep->id,'type'=>'Full-time','location'=>'Dire Dawa','deadline'=>now()->addMonth()]);
    }
}
