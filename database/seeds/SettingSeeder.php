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
            'termsandconditions_clients'=>' الشروط والاحكام للعملاء',
            'termsandconditions_freelancers'=>' الشروط والاحكام للاعضاء',
            'account_num'=>'57357',
            'logo'=>'مؤسسة مؤئل للتصميم والديكور',
            'projects_into'=>'تقدم المؤسسة ما يال',
            'about_into'=>'من نحن وما الى ذلك',
               ]);
    }
}
