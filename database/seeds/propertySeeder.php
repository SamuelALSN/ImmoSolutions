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
            array('id'=>7, 'name'=>'Commerce'),
            array('id'=>8, 'name'=>'Loft ,Atelier '),
            array('id'=>9, 'name'=>'Bureaux'),
            array('id'=>10, 'name'=>'Magasin'),
            array('id'=>11, 'name'=>'Entrepots et Locaux d\'activités'),
            array('id'=>12, 'name'=>'Boutique'),

        );
        DB::table('propertyType')->insert($propertiestype);
    }
}
