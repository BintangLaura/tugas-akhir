<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
       return view('hello-world');
    }

    public function dashboard() {
        return view ('pages.dashboard');
    }

    public function produk() {
        $products = DB::table('products')->count();
        $category = DB::table('product_categories')->count();
        $total_harga_produk = DB::table('products')->sum('price');
        $stok_produk = DB::table('products')->sum('stock');

        $total_produk = DB::table('products')
        ->select(DB::raw('count(*) as product_count, category_id'))
        ->groupBy('category_id')
        ->pluck('product_count');
// dd($total_produk);

$total_harga = Product::selectRaw('SUM(price) as total_price, category_id')
        ->groupBy('category_id')
        ->pluck('total_price');
// dd($total_harga);

$total_stok = Product::selectRaw('SUM(stock) as stok')
        ->groupBy('category_id')
        ->pluck('stok');
// dd($total_stok);

$kategori = DB::table('product_categories')
    ->select(DB::raw('category_name'))
    ->groupBy('category_name')
    ->pluck('category_name');
// dd($kategori);

$produk = DB::table('products')
->join('product_categories', 'products.category_id', '=', 'product_categories.id')
->select(DB::raw('count(*) as product_count, category_name'))
->groupBy('category_name')
->get();
// dd($produk);

$sum_harga = Product::join('product_categories', 'products.category_id', '=', 'product_categories.id')
->select(DB::raw('SUM(price) as harga, category_name'))
->groupBy('category_name')
->get();
// dd($sum_harga);

$sum_stok = Product::join('product_categories', 'products.category_id', '=', 'product_categories.id')
->select(DB::raw('SUM(stock) as jmlStok, category_name'))
->groupBy('category_name')
->get();
// dd($sum_stok);

return view('pages.dashboard', compact('total_produk', 'total_harga', 'total_stok', 'kategori', 'produk', 'sum_harga', 'sum_stok'), ['products' => $products, 'category' => $category,
    'total_harga_produk' => $total_harga_produk, 'stok_produk' => $stok_produk]);
    }

}
