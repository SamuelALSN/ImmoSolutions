<?php

use Illuminate\Database\Seeder;

class citiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('cities')->delete();
        $cities = array(
            array('name' => "Guerin Kouka",'state_id' => 1),
            array('name' => "Sokode",'state_id' => 1),
            array('name' => "Sotouboua",'state_id' => 1),
            array('name' => "Tchamba",'state_id' => 1),
            array('name' => "Bafilo",'state_id' => 2),
            array('name' => "Bassar",'state_id' => 2),
            array('name' => "Kande",'state_id' => 2),
            array('name' => "Kara",'state_id' => 2),
            array('name' => "Kpagouda",'state_id' => 2),
            array('name' => "Niamtougou",'state_id' => 2),
            array('name' => "Agbelouve",'state_id' => 3),
            array('name' => "Aneho",'state_id' => 3),
            array('name' => "Lome",'state_id' => 3),
            array('name' => "Tabligbo",'state_id' => 3),
            array('name' => "Tsevie",'state_id' => 3),
            array('name' => "Vogan",'state_id' => 3),
            array('name' => "Amlame",'state_id' => 3),
            array('name' => "Anie",'state_id' => 4),
            array('name' => "Atakpame",'state_id' => 4),
            array('name' => "Badou",'state_id' => 4),
            array('name' => "Blitta",'state_id' => 4),
            array('name' => "Kouve",'state_id' => 4),
            array('name' => "Kpalime",'state_id' => 4),
            array('name' => "Kpessi",'state_id' => 4),
            array('name' => "Notse",'state_id' => 4),
            array('name' => "Dapaong",'state_id' => 5),
            array('name' => "Mango",'state_id' => 5),
            array('name' => "Tandjouare",'state_id' => 5),
        );
        DB::table('cities')->insert($cities);
    }
}
