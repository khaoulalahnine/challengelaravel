<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Booking;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $services = Service::factory(10)->create();

        Booking::factory(30)->create();
    }
}
