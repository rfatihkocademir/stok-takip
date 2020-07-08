<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Araba_parçalari = array("Araç tavanı", "kapılar"," bagaj kapağı", "motor kaputu", "ön çamurluklar", "arka çamurluklar", "arka omuz", "ön tampon", "ön ızgara", "arka tampon", "Kanat (spoiler)", "ön camlar", "arka camlar", "yan camlar", "yan aynalar");
        for($i=0;$i<count($Araba_parçalari);$i++){
            DB::table('products')->insert([
                'product_name' => $Araba_parçalari[$i],
                'price' => random_int(50,125),
                'quantity' => random_int(120,500),
            ]);
        }
    }
}
