<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idDIscount)
    {
        return view('dashboard.products.discount.create',compact('idDIscount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'percentage'=>'required',
            'start' => 'required|date|before_or_equal:end',
            'end' => 'required|date|after_or_equal:start',
        ]);

        Discount::create($request->all());
        return redirect()->route('dashboard.discount.show',['discount' => $request->product_id])->with('success','Discount Hasbeen Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show($discount)
    {
        return view('dashboard.products.discount.index',compact('discount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        return view('dashboard.products.discount.edit',compact('discount'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        $request->validate([
            'percentage'=>'required',
            'start' => 'required|date|before_or_equal:end',
            'end' => 'required|date|after_or_equal:start',
        ]);

        $discount->update($request->all());
        return redirect()->route('dashboard.discount.show',['discount' => $discount->product_id])->with('success','Discount Hasbeen Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        //
    }
}
