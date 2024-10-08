<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function store()
    {
        // Daftar produk elektronik
        $electronicProducts = [
            'Remote', 
            'Television', 
            'Lamp', 
            'Vacuum Cleaner', 
            'Microwave', 
            'Oven', 
            'Blender', 
            'Smartphone', 
            'Laptop', 
            'Washing Machine', 
            'Refrigerator', 
            'Air Conditioner', 
            'Headphones', 
            'Tablet', 
            'Camera',
            'Toaster'
        ];

        // randomise products
        $randomProduct = $electronicProducts[array_rand($electronicProducts)];

        // Menambahkan produk baru dengan nama dan deskripsi acak
        Product::create([
            'name' => $randomProduct,
            'description' => 'Description for ' . $randomProduct,
            'price' => rand(50000, 1000000), // random price between 50.000 to 1.000.000
            'qty' => rand(1, 100), // random quantity between 1 to 100
        ]);

        // Redirect back to /products page
        return redirect('/products');
    }
}
