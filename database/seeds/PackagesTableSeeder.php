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
        $pakcagesRome->departure= date('Y-m-d',strtotime(2021-06-19));
        $pakcagesRome->arrival=date('Y-m-d',strtotime(2021-06-20));
        $pakcagesRome->hotel_name='Giulio Cesare';
        
        $pakcagesRome->save();

        $pakcageSParis= new Package();
       
        $pakcageSParis->package_name='Mille e una Notte';
        $pakcageSParis->description="2 notti con colazione e wellness. Una raccolta ricca e completa per scegliere fra location da favola e vivere un sogno insieme ad una persona davvero speciale.";
        $pakcageSParis->travelers=2;
        $pakcageSParis->price=7000.00;
        $pakcageSParis->where_from='Venezia';
        $pakcageSParis->where_to='Parigi';
        $pakcageSParis->departure= date('Y-m-d',strtotime(2022-02-02));
        $pakcageSParis->arrival=date('Y-m-d',strtotime(2022-02-02));
        $pakcageSParis->hotel_name='Pippo';
        
        $pakcageSParis->save();

        $pakcageSParis= new Package();
       
        $pakcageSParis->package_name='Spagna!! Spagna!!!!';
        $pakcageSParis->description="2 notti con colazione e wellness. Una raccolta ricca e completa per scegliere fra location da favola e vivere un sogno insieme ad una persona davvero speciale.";
        $pakcageSParis->travelers=2;
        $pakcageSParis->price=300.00;
        $pakcageSParis->where_from='Venezia';
        $pakcageSParis->where_to='Madrid';
        $pakcageSParis->departure= date('Y-m-d',strtotime(2023-02-02));
        $pakcageSParis->arrival=date('Y-m-d',strtotime(2023-02-02));
        $pakcageSParis->hotel_name='Toro-Loco';
        
        $pakcageSParis->save();
    
    }
}
