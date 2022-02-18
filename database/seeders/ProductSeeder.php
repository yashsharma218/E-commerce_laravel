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
            "name"=>"LG Mobile",
            "price"=>"10000",
            "description"=>"This is LG Description",
            "category"=>"Mobile",
            "gallery"=>"https://www.google.com/search?q=lg+mobile+images&rlz=1C1GCEA_en&sxsrf=APq-WBui0Q4eMRvKta3638zXf0jVNyD8CQ:1645223390677&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjw2Jvepor2AhX663MBHdURBkcQ_AUoAnoECAIQBA&biw=1366&bih=617&dpr=1#imgrc=TaeJp9aKlAiHgM"
        ]);
    }
}
