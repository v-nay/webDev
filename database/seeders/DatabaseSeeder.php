<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\NavHeadingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ConfigSeeder::class);
        $this->call(EmailTemplateSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(FrontendUserSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(NavHeadingSeeder::class);
    }
}
