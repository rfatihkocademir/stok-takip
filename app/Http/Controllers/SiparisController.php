<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Siparis;
use Exception;

class SiparisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Siparis::all();
        return response()->json($product);
    }


    public function store(Request $request)
    {
        try {

            $siparis = new Siparis();
            $siparis->selected_items = $request->selected_items;
            $siparis->total_price = $request->total_price;
            $siparis->save();
            return response()->json('Sipariş Kaydedildi!');
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siparis = Siparis::find($id);
        return response()->json($siparis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
