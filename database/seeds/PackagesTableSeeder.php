<?php

use App\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pakcagesRome= new Package();
       
        $pakcagesRome->package_name='Mille e una Notte';
        $pakcagesRome->description="1, 2 o 3 notti con colazione oppure 1 notte con colazione e una cena e/o un'esperienza benessere o ancora 2 notti con colazione e wellness. Una raccolta ricca e completa per scegliere fra location da favola e vivere un sogno insieme ad una persona davvero speciale.";
        $pakcagesRome->travelers=2;
        $pakcagesRome->price=4000.00;
        $pakcagesRome->where_from='Roma';
        $pakcagesRome->where_to='Atlanta';
        $pakcagesRome->departure=2022;
        $pakcagesRome->arrival=2022;
        $pakcagesRome->hotel_name;
        
        $pakcagesRome->save();
    }
}
