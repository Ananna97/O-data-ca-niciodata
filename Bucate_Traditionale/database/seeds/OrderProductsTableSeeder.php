<?php

use App\OrderProduct;
use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderProduct::create([
        	'user_id'=>'3',
            'id_product' => '10001',
            'quantity'=>3, 
            'address'=>'Romanitei, nr.47', 
            'city'=>'Prahova', 
            'county'=>'Campina',
            'postal_code'=> '105600',
        ]);

        OrderProduct::create([
        	'user_id'=>'4',
            'id_product' => '40005',
            'quantity'=>1, 
            'address'=>'Aleea Migdalelor, nr.5', 
            'city'=>'Bucuresti', 
            'county'=>'Bucuresti',
            'postal_code'=> '222444',
        ]);

        OrderProduct::create([
        	'user_id'=>'2',
            'id_product' => '60006',
            'quantity'=>2, 
            'address'=>'Baiului, nr.7', 
            'city'=>'Alba-Iulia', 
            'county'=>'Alba',
            'postal_code'=> '234345',
        ]);

        OrderProduct::create([
        	'user_id'=>'2',
            'id_product' => '60005',
            'quantity'=>3, 
            'address'=>'Baiului, nr.7', 
            'city'=>'Alba-Iulia', 
            'county'=>'Alba',
            'postal_code'=> '234345',
        ]);

        OrderProduct::create([
        	'user_id'=>'1',
            'id_product' => '10001',
            'quantity'=>1, 
            'address'=>'Castelului, nr.14', 
            'city'=>'Bucuresti', 
            'county'=>'Bucuresti',
            'postal_code'=>'189101',
        ]);

        OrderProduct::create([
        	'user_id'=>'4',
            'id_product' => '60002',
            'quantity'=>7, 
            'address'=>'Aleea Migdalelor, nr.5', 
            'city'=>'Bucuresti', 
            'county'=>'Bucuresti',
            'postal_code'=> '222444',
        ]);

        OrderProduct::create([
        	'user_id'=>'3',
            'id_product' => '50003',
            'quantity'=>2, 
            'address'=>'Romanitei, nr.47', 
            'city'=>'Prahova', 
            'county'=>'Campina',
            'postal_code'=> '105600',
        ]);

    }
}
