<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Discount;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::all();
        return view('discounts.index', compact('discounts'));
    }

    public function fetch_discounts(){
        $discounts = Discount::all();
        return response()->json([
            'status' => 200,
            'discounts' => $discounts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $discount = new Discount();
        $discount->name = $request->name;
        $discount->discount_percent = $request->percent;
        $discount->save();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully'
        ]);
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
        $discount = Discount::find($id);
        $discount->delete();
        return response()->json([
            'status' => 200,
            'discount' => $discount
        ]);
    }
}
