<?php


use App\Product;
use App\User;
Use App\OrderProduct;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProductsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(OrderProductsTableSeeder::class);
    }
}
