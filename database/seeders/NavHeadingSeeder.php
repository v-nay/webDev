<?php

namespace Database\Seeders;

use App\Model\Heading;
use Illuminate\Database\Seeder;

class NavHeadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heading = Heading::where('id', 1)->first();
        if (!isset($heading)) {
            Heading::create([
                'name' => 'Menu',
            ]);
        }
        $heading2 = Heading::where('id', 2)->first();
        if (!isset($heading2)) {
            Heading::create([
                'name' => 'Specials',
            ]);
        }
        $heading3 = Heading::where('id', 3)->first();
        if (!isset($heading3)) {
            Heading::create([
                'name' => 'Reservation',
            ]);
        }
        $heading4 = Heading::where('id', 4)->first();
        if (!isset($heading4)) {
            Heading::create([
                'name' => 'About',
            ]);
        }
        $heading5 = Heading::where('id', 5)->first();
        if (!isset($heading5)) {
            Heading::create([
                'name' => 'Contact',
            ]);
        }
    }
}
