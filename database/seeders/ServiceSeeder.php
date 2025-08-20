<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create(['name'=>'Car Wash','description'=>'Full car wash','price'=>500]);
        Service::create(['name'=>'AC Repair','description'=>'AC servicing','price'=>1500]);
    }
}
