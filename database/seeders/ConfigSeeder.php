<?php

namespace Database\Seeders;

use App\Model\Config;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = Config::where('id', 1)->first();
        if (!isset($settings)) {
            $directory = public_path() . '/uploads/config';
            if (is_dir($directory) != true) {
                \File::makeDirectory($directory, $mode = 0755, true);
            }
            \File::copy(
                public_path('images/logo.png'),
                public_path('uploads/config/cms_logo.png')
            );
            Config::create([
                'label' => 'cms logo',
                'type' => 'file',
                'value' => 'cms_logo.png',
            ]);
        }

        $settings2 = Config::where('id', 2)->first();
        if (!isset($settings2)) {
            Config::create([
                'label' => 'cms title',
                'type' => 'text',
                'value' => 'KOI',
            ]);
        }
        $settings3 = Config::where('id', 3)->first();
        if (!isset($settings3)) {
            Config::create([
                'label' => 'cms theme color',
                'type' => 'text',
                'value' => '#292961',
            ]);
        }

        $settings4 = Config::where('id', 4)->first();
        if (!isset($settings4)) {
            Config::create([
                'label' => 'facebook',
                'type' => 'text',
                'value' => 'www.facebook.com',
            ]);
        }
        $settings5 = Config::where('id', 5)->first();
        if (!isset($settings5)) {
            Config::create([
                'label' => 'instagram',
                'type' => 'text',
                'value' => 'www.instagram.com',
            ]);
        }
        $settings6 = Config::where('id', 6)->first();
        if (!isset($settings6)) {
            Config::create([
                'label' => 'x',
                'type' => 'text',
                'value' => 'www.x.com',
            ]);
        }
        $settings7 = Config::where('id', 7)->first();
        if (!isset($settings7)) {
            Config::create([
                'label' => 'youtube',
                'type' => 'text',
                'value' => 'www.youtube.com',
            ]);
        }
        
    }
}
