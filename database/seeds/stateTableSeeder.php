<?php

use Illuminate\Database\Seeder;

class stateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $states = array(

            array('name' => "Centre",'country_id' => 218),
            array('name' => "Kara",'country_id' => 218),
            array('name' => "Maritime",'country_id' => 218),
            array('name' => "Plateaux",'country_id' => 218),
            array('name' => "Savanes",'country_id' => 218),

            array('name' => "Alibori",'country_id' => 23),
            array('name' => "Atacora",'country_id' => 23),
            array('name' => "Atlantique",'country_id' => 23),
            array('name' => "Borgou",'country_id' => 23),
            array('name' => "Collines",'country_id' => 23),
            array('name' => "Couffo",'country_id' => 23),
            array('name' => "Donga",'country_id' => 23),
            array('name' => "Littoral",'country_id' => 23),
            array('name' => "Mono",'country_id' => 23),
            array('name' => "Oueme",'country_id' => 23),
            array('name' => "Plateau",'country_id' => 23),
            array('name' => "Zou",'country_id' => 23),

            array('name' => "Bougouriba",'country_id' => 34),
            array('name' => "Boulgou",'country_id' => 34),
            array('name' => "Boulkiemde",'country_id' => 34),
            array('name' => "Comoe",'country_id' => 34),
            array('name' => "Ganzourgou",'country_id' => 34),
            array('name' => "Gnagna",'country_id' => 34),
            array('name' => "Gourma",'country_id' => 34),
            array('name' => "Houet",'country_id' => 34),
            array('name' => "Ioba",'country_id' => 34),
            array('name' => "Kadiogo",'country_id' => 34),
            array('name' => "Kenedougou",'country_id' => 34),
            array('name' => "Komandjari",'country_id' => 34),
            array('name' => "Kompienga",'country_id' => 34),
            array('name' => "Kossi",'country_id' => 34),
            array('name' => "Kouritenga",'country_id' => 34),
            array('name' => "Kourweogo",'country_id' => 34),
            array('name' => "Leraba",'country_id' => 34),
            array('name' => "Mouhoun",'country_id' => 34),
            array('name' => "Nahouri",'country_id' => 34),
            array('name' => "Namentenga",'country_id' => 34),
            array('name' => "Noumbiel",'country_id' => 34),
            array('name' => "Oubritenga",'country_id' => 34),
            array('name' => "Oudalan",'country_id' => 34),
            array('name' => "Passore",'country_id' => 34),
            array('name' => "Poni",'country_id' => 34),
            array('name' => "Sanguie",'country_id' => 34),
            array('name' => "Sanmatenga",'country_id' => 34),
            array('name' => "Seno",'country_id' => 34),
            array('name' => "Sissili",'country_id' => 34),
            array('name' => "Soum",'country_id' => 34),
            array('name' => "Sourou",'country_id' => 34),
            array('name' => "Tapoa",'country_id' => 34),
            array('name' => "Tuy",'country_id' => 34),
            array('name' => "Yatenga",'country_id' => 34),
            array('name' => "Zondoma",'country_id' => 34),
            array('name' => "Zoundweogo",'country_id' => 34),

            array('name' => "Greater Accra",'country_id' => 83),
            array('name' => "Northern",'country_id' => 83),
            array('name' => "Upper East",'country_id' => 83),
            array('name' => "Upper West",'country_id' => 83),
            array('name' => "Volta",'country_id' => 83),
            array('name' => "Western",'country_id' => 83),

            array('name' => "Abidjan",'country_id' => 53),
            array('name' => "Agneby",'country_id' => 53),
            array('name' => "Bafing",'country_id' => 53),
            array('name' => "Denguele",'country_id' => 53),
            array('name' => "Dix-huit Montagnes",'country_id' => 53),
            array('name' => "Fromager",'country_id' => 53),
            array('name' => "Haut-Sassandra",'country_id' => 53),
            array('name' => "Lacs",'country_id' => 53),
            array('name' => "Lagunes",'country_id' => 53),
            array('name' => "Marahoue",'country_id' => 53),
            array('name' => "Moyen-Cavally",'country_id' => 53),
            array('name' => "Moyen-Comoe",'country_id' => 53),
            array('name' => "N'zi-Comoe",'country_id' => 53),
            array('name' => "Sassandra",'country_id' => 53),
            array('name' => "Savanes",'country_id' => 53),
            array('name' => "Sud-Bandama",'country_id' => 53),
            array('name' => "Sud-Comoe",'country_id' => 53),
            array('name' => "Vallee du Bandama",'country_id' => 53),
            array('name' => "Worodougou",'country_id' => 53),
            array('name' => "Zanzan",'country_id' => 53),
        );
        DB::table('states')->insert($states);
    }
}
