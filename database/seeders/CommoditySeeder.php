<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proficiency;
use App\Models\Commodity;
use App\Models\Commodity_package;
use App\Models\Commodity_document;


class CommoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pup = Proficiency::all()->pluck('id');
        foreach ($pup as $row) {

            Commodity::factory()->count(10)->create(['proficiency_id'=>$row])->each(function($commodity){
        
                //seed commodity package
                $commodity_package = Commodity_package::factory()->count(3)->make();
                $commodity->package()->saveMany($commodity_package);
    
                //seed commodity document
                $commodity_document = Commodity_document::factory()->count(1)->make();
                $commodity->document()->saveMany($commodity_document);
            });
        }
       
        
    }
}
