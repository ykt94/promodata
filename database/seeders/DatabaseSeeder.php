<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Product::factory()->count(50)->create();

        //Supplier::factory()->count(10)->create();

        //  $products = Product::all();

        // Supplier::all()->each(function ($supplier) use ($products) { 
        //     $supplier->products()->attach(
        //         $products->random(rand(1, 3))->pluck('id')->toArray()
        //     ); 
        // });

        // foreach(DB::table('product_supplier')->get() as $item) {
        //     DB::table('product_supplier')
        //         ->where('id', $item->id)
        //         ->update(['quantity' => rand(5, 50)]);
        }
    }
}
