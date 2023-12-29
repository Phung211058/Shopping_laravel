<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
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
        $products = Product::all();
        $discounts = Discount::all();
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
            'message' => 'Successfully',
        ]);
        // return redirect('/');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        // if ($product) {
        //     // Đường dẫn đến thư mục public/images
        //     $imagePath = public_path('images');
        //     // Tên tệp tin ảnh
        //     $imageName = $product->image;
        //     // Kiểm tra xem tệp tin tồn tại trước khi xóa hoặc chuyển
        //     if (File::exists($imagePath . '/' . $imageName)) {
        //         // Đường dẫn đến thư mục public/deleted_images
        //         $deletedImagePath = public_path('deleted_images');
        //         // Kiểm tra xem thư mục deleted_images có tồn tại chưa, nếu chưa thì tạo mới
        //         // if (!File::exists($deletedImagePath)) {
        //         //     File::makeDirectory($deletedImagePath, 0755, true);
        //         // }
        //         // Đường dẫn mới của tệp tin ảnh trong thư mục deleted_images
        //         $newImagePath = $deletedImagePath . '/' . $imageName;
        //         // Di chuyển tệp tin ảnh sang thư mục deleted_images
        //         File::move($imagePath . '/' . $imageName, $newImagePath);
        //         // Xóa sản phẩm từ database
                $product->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'deleted successfully'
                ]);
        //     }
        // }

        // return response()->json([
        //     'status' => 404,
        //     'message' => 'product not found'
        // ], 404);
    }
}
