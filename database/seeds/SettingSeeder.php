<?php

use Illuminate\Database\Seeder;
use App\Settings;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'phone_num'=>'01116302064',
            'whats_num'=>'0111602064',
            'email'=>'yezzat2020@gmail.com',
            'termsandconditions'=>'الشروط والاحكام',
            
               ]);
    }
}
