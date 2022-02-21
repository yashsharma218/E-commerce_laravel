<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "name"=>"LG Mobile2",
            "price"=>"10000",
            "description"=>"This is LG2 Description",
            "category"=>"Mobile",
            "gallery"=>"https://www.lg.com/in/images/mobile-phones/md07523361/thumbnail/LMK610IM-350-3.jpg",
        ],
        [
            "name"=>"Computer2",
            "price"=>"100000",
            "description"=>"This is Computer2 Description",
            "category"=>"PC",
            "gallery"=>"https://cdn.mos.cms.futurecdn.net/mZWTSqsHwPqLJ4WCez9mSm.jpg"
        ]
    
        ]);
    }
}
