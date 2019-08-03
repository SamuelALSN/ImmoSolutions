<?php

use Illuminate\Database\Seeder;

class propertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('propertytype')->delete();
        $propertiestype = array(
            array('id'=>1 , 'name'=>'Appartements'),
            array('id'=>2, 'name'=>'Maison'),
            array('id'=>3 , 'name'=>'Villa'),
            array('id'=>4, 'name'=>'Immeuble'),
            array('id'=>5, 'name'=>'Terrain'),
            array('id'=>6, 'name'=>'Studio'),
            array('id'=>7, 'name'=>'ChambreEtudiant'),
            array('id'=>8, 'name'=>'Hotel'),
            array('id'=>9, 'name'=>'Commerce'),
            array('id'=>10, 'name'=>'Loft ,Atelier '),
            array('id'=>11, 'name'=>'Bureaux'),
            array('id'=>12, 'name'=>'Magasin'),
            array('id'=>13, 'name'=>'Entrepots et Locaux d\'activités'),
            array('id'=>14, 'name'=>'Boutique'),

        );
        DB::table('propertyType')->insert($propertiestype);

        DB::table('sub_propertytype')->delete();
        $subpropertiestype = array(
            array('id'=>1 , 'name'=>' VILLA F1','propertyType_id'=>3),
            array('id'=>2, 'name'=>' VILLA F2','propertyType_id'=>3),
            array('id'=>3 , 'name'=>' VILLA F3','propertyType_id'=>3),
            array('id'=>4, 'name'=>'VILLA F4','propertyType_id'=>3),
//            array('id'=>5, 'sub_name'=>'REZ DE CHAUSEE ',''),
//            array('id'=>6, 'sub_name'=>'Studio',''),
//            array('id'=>7, 'sub_name'=>'ChambreEtudiant',''),
//            array('id'=>8, 'sub_name'=>'Hotel',''),
//            array('id'=>9, 'sub_name'=>'Commerce',''),
//            array('id'=>10, 'sub_name'=>'Loft ,Atelier ',''),
//            array('id'=>11, 'sub_name'=>'Bureaux',''),
//            array('id'=>12, 'sub_name'=>'Magasin',''),
//            array('id'=>13, 'sub_name'=>'Entrepots et Locaux d\'activités',''),
//            array('id'=>13, 'sub_name'=>'Boutique',''),

        );

        DB::table('sub_propertytype')->insert($subpropertiestype);
    }
}
