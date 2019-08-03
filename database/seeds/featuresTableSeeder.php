<?php

use Illuminate\Database\Seeder;

class featuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('features')->delete();
        $features = array(
            array('id'=>1 , 'feature_name'=>'Air Conditionné'),
            array('id'=>2, 'feature_name'=>'Salle de Gym'),
            array('id'=>3 , 'feature_name'=>'Alarm'),
            array('id'=>4, 'feature_name'=>'TV cable&WIFI'),
            array('id'=>5, 'feature_name'=>'Réfrigérateur'),
            array('id'=>6, 'feature_name'=>'Cheminée'),
            array('id'=>7, 'feature_name'=>'Chauffage'),
            array('id'=>8, 'feature_name'=>'Buanderie'),
            array('id'=>9, 'feature_name'=>'Piscine'),
            array('id'=>10, 'feature_name'=>'Chambre'),
            array('id'=>11, 'feature_name'=>'Pièce'),
            array('id'=>12, 'feature_name'=>'Douche'),
            array('id'=>13, 'feature_name'=>'Lits'),
            array('id'=>14, 'feature_name'=>'Garage'),
            array('id'=>15, 'feature_name'=>'Salon'),
            array('id'=>16, 'feature_name'=>'Eau'),
            array('id'=>17, 'feature_name'=>'Electricité'),

        );
        DB::table('features')->insert($features);

        DB::table('standing')->delete();
        $standing = array(
            array('id'=>1,'standing_name'=>'Haut Standing'),
            array('id'=>2,'standing_name'=>'Moyen Standing '),
            array('id'=>3,'standing_name'=>'Bas Standing'),
        );
        DB::table('standing')->insert($standing);
    }
}
