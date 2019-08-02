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
        //
//        DB::table('propertytype')->delete();
//        $propertiestype = array(
//            array('id'=>1 , 'propertyType_name'=>'Appartements'),
//            array('id'=>2, 'propertyType_name'=>'Maison'),
//            array('id'=>3 , 'propertyType_name'=>'Villa'),
//            array('id'=>4, 'propertyType_name'=>'Immeuble'),
//            array('id'=>5, 'propertyType_name'=>'Terrain'),
//            array('id'=>6, 'propertyType_name'=>'Studio'),
//            array('id'=>7, 'propertyType_name'=>'ChambreEtudiant'),
//            array('id'=>8, 'propertyType_name'=>'Hotel'),
//            array('id'=>9, 'propertyType_name'=>'Commerce'),
//            array('id'=>10, 'propertyType_name'=>'Loft ,Atelier '),
//            array('id'=>11, 'propertyType_name'=>'Bureaux'),
//            array('id'=>12, 'propertyType_name'=>'Magasin'),
//            array('id'=>13, 'propertyType_name'=>'Entrepots et Locaux d\'activités'),
//            array('id'=>14, 'propertyType_name'=>'Boutique'),
//
//        );
//        DB::table('propertyType')->insert($propertiestype);

        DB::table('sub_propertytype')->delete();
        $subpropertiestype = array(
            array('id'=>1 , 'sub_propertyType_name'=>' VILLA F1','propertyType_id'=>3),
            array('id'=>2, 'sub_propertyType_name'=>' VILLA F2','propertyType_id'=>3),
            array('id'=>3 , 'sub_propertyType_name'=>' VILLA F3','propertyType_id'=>3),
            array('id'=>4, 'sub_propertyType_name'=>'VILLA F4','propertyType_id'=>3),
//            array('id'=>5, 'sub_propertyType_name'=>'REZ DE CHAUSEE ',''),
//            array('id'=>6, 'sub_propertyType_name'=>'Studio',''),
//            array('id'=>7, 'sub_propertyType_name'=>'ChambreEtudiant',''),
//            array('id'=>8, 'sub_propertyType_name'=>'Hotel',''),
//            array('id'=>9, 'sub_propertyType_name'=>'Commerce',''),
//            array('id'=>10, 'sub_propertyType_name'=>'Loft ,Atelier ',''),
//            array('id'=>11, 'sub_propertyType_name'=>'Bureaux',''),
//            array('id'=>12, 'sub_propertyType_name'=>'Magasin',''),
//            array('id'=>13, 'sub_propertyType_name'=>'Entrepots et Locaux d\'activités',''),
//            array('id'=>13, 'sub_propertyType_name'=>'Boutique',''),

        );

        DB::table('sub_propertytype')->insert($subpropertiestype);
    }
}
