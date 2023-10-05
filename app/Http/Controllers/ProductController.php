<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
   public function create()
   {

return view('create');

   }
  
    public function product()
   {

 
$products = Product::all();
return view('product', ['products' => $products]);

   }
    public function store(Request $request){
      $data = $request->validate([
         'name' => 'required',
         'quantity' => 'required|numeric',
         'description' => 'nullable',
         'price' => 'required|decimal:0,2' 
       
     ]);

     $newProduct = Product::create($data);

     return redirect(route('product.pro'));

         ;}

         public function edit(Product $product){
            return view('edit', ['product' => $product]);
        }

        public function update(Product $product, Request $request){
         $data = $request->validate([
            'name' => 'required',
         'quantity' => 'required|numeric',
         'description' => 'nullable',
         'price' => 'required|decimal:0,2' 
         ]);
         $product->update($data);

         return redirect(route('product.pro'))->with('success', 'Product Updated Succesffully');
      
      }
      public function destroy(Product $product){
         $product->delete();
         return redirect(route('product.pro'))->with('success', 'Product deleted Succesffully');
     }
}
