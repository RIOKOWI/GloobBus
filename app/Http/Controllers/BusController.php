<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    //
    public function index(){

        $bus = Bus::all();
        return view('buses.index', ['buses' => $bus]);

    }
    // Form tambah Bus
    public function create()
    {
        return view('buses.create');
    }

     // input data
     public function store(Request $request){

        $data = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'tujuan' => 'required',
            'harga' => 'required|decimal:0,2',
            'jenis' => 'required|in:ekonomi,bisnis,eksekutif',
            'jadwal_keberangkatan' => 'required|date|date_format:Y-m-d',
            'supir' => 'required'

        ]);

        $newBus = Bus::create($data);

        return redirect(route('buses.index'));
    }

    // ke form edit
    public function edit(Bus $bus){
        return view('buses.edit', ['bus' => $bus]);

    }


    //update
    public function update(Bus $bus, Request $request){

        $data = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'tujuan' => 'required',
            'harga' => 'required|decimal:0,2',
            'jenis' => 'required|in:ekonomi,bisnis,eksekutif',
            'jadwal_keberangkatan' => 'required|date|date_format:Y-m-d',
            'supir' => 'required'

        ]);

        $bus->update($data);

        return redirect(route('buses.index'))->with('success', 'Bus Updated Succesfully');
    }
    
    public function destroy(Bus $bus){
        $bus->delete();
        return redirect(route('buses.index'))->with('success', 'Buse Deleted Succesfully');

    }
}
