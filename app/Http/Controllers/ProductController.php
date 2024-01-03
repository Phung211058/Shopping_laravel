<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function home(){
        $products = Product::join('discounts', 'products.discount_id', '=', 'discounts.id')
            ->select('products.*')
            ->orderByDesc('discounts.discount_percent')
            ->orderBy('products.price')
            ->limit(5)
            ->get();
        return view('main.home', compact('products'));
    }

    public function product_detail(string $id){
        $products = Product::join('discounts', 'products.discount_id', '=', 'discounts.id')
            ->select('products.*')
            ->orderByDesc('discounts.discount_percent')
            ->orderBy('products.price')
            ->limit(5)
            ->get();
        $product = Product::find($id);
        return view('main.product_detail', compact('product', 'products'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $discounts = Discount::all();
        return view('products.index', compact('products', 'discounts'));
    }

    public function fetch_products()
    { 
        $discounts = Discount::all();
        $products = Product::all();
        foreach ($products as $product) {
            // formatted_price IS A VALUE THAT HAVE FOMATTED FROM THE PRICE VALUE IN THE DATABASE
            $product->formatted_price = number_format($product->price, 0, ',', '.');
            // formatted_sale_price VALUE IS CREATED AND ASSIGNED TO THE VALUE THAT IS RETURNED FROM getFormattedSalePriceAttribute() FUNCTION IN THE PRODUCT MODEL
            $product->formatted_sale_price = $product->getFormattedSalePriceAttribute();
            // discount_name VALUE IS CREATED AND ASSIGNED TO THE "DISCOUNT NAME" IN THE DISCOUNT TABLE. BEFORE ASSIGNING, CHECKING IF THE PRODUCT HAS ANY DISCOUNT
            $product->discount_name = $product->discount ? $product->discount->name : ' ';
        }
        return response()->json([
            'status' => 100,
            'products' => $products,
            'discounts' => $discounts
        ]);
    }

    public function search_products(Request $request) {
        $discounts = Discount::all();
        $search = $request->input('search_product');

        if (!empty($search)) {
            $products = Product::where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('price', 'LIKE', '%' . $search . '%')
                    ->orWhere('category', 'LIKE', '%' . $search . '%');
            })->get();
        } else {
          $products = Product::all();
        }
        foreach ($products as $product) {
            // formatted_price IS A VALUE THAT HAVE FOMATTED FROM THE PRICE VALUE IN THE DATABASE
            $product->formatted_price = number_format($product->price, 0, ',', '.');
            // formatted_sale_price VALUE IS CREATED AND ASSIGNED TO THE VALUE THAT IS RETURNED FROM getFormattedSalePriceAttribute() FUNCTION IN THE PRODUCT MODEL
            $product->formatted_sale_price = $product->getFormattedSalePriceAttribute();
            // discount_name VALUE IS CREATED AND ASSIGNED TO THE "DISCOUNT NAME" IN THE DISCOUNT TABLE. BEFORE ASSIGNING, CHECKING IF THE PRODUCT HAS ANY DISCOUNT
            $product->discount_name = $product->discount ? $product->discount->name : ' ';
        }
        return response()->json([
            'status' => 200,
            'products' => $products,
            'discounts' => $discounts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $discounts = Discount::all();
        return view('products.create', compact('discounts', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $discounts = Discount::all();
        if($request->hasFile('Image')){
            $file = $request->Image;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('images'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $products = new Product();
        $products->name = $request->name;
        $products->discount_id = $request->discount;
        $products->category = $request->category;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->description = $request->description;
        $products->image = $request->image;
        $products->save();
        return response()->json([
            'status' => 200,
            'discounts' => $discounts,
        ]);
        // return redirect('/');
    }

    public function getDiscounts()
    {
        $discounts = Discount::all();
        return response()->json($discounts);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return response()->json([
            'status' => 200,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Product::find($id);
        if($request->hasFile('Image')){
            $file = $request->Image;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('images'), $file_name);
            $request->merge(['image' => $file_name]);
            $products->image = $request->image;
        }
        $products->name = $request->name;
        $products->discount_id = $request->discount;
        $products->category = $request->category;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->description = $request->description;
        $products->save();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json([
            'status' => 200,
            'product' => $product
        ]);
    }
}
