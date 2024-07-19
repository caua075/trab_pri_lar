<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $search = request('search');
        if($search){
            $products = Product::where([['name', 'like', '%'.$search.'%']])->get();
        } else {
            $products = Product::all();
        }

        return view('welcome', ['products' => $products, 'search' => $search]);
    }

    public function create(){
        return view('products.create');
    }

    public function about() {
        return view('about');
    }

    public function store(Request $request){
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        // Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $product->image = $imageName;
        }

        $user = auth()->user();
        
        $product->save();
        return redirect('/')->with('msg', 'Produto Cadastrado!');
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
    }
}
