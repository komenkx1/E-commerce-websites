<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::all();
        return view('profile.stores.index',compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::all();
        return view('profile.stores.create',compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bankItem = Bank::firstOrCreate([
            'name' => $request->bank_id
        ]);

        Store::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'bank_id' => $bankItem->id,
            'description' => $request->description,
            'rekening_number' => $request->rekening_number
        ]);

        return redirect()->route('profile.setting.index')->with('success','Store registration complate. Please Wait Admin Verified Your Account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        $stores = $request->all();
        $bankItem = Bank::updateOrCreate([
            'name' => $request->bank_id
        ]);

        
        $stores['bank_id'] = $bankItem->id;

        if ($store->status == 'rejected') {
            $stores['status'] = 'pending';
            $store->update($stores);
        }else {
               $store->update($stores);
        }

       

        return redirect()->back()->with('success','Store data updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
