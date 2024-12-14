<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // Ambil semua transaksi
        $transactions = Transaction::with('customer', 'bus')->get();  // Pastikan relasi customer dan bus didefinisikan di model

        return view('transactions.index', compact('transactions'));
    }

    // Method to show the form for creating a new transaction
    public function create()
    {
        $customers = Customer::all();
        $buses = Bus::all();
        return view('transactions.create', compact('customers', 'buses'));
    }

    // Method to store a new transaction
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'customer_id' => 'required|exists:customers_tabel,id',
            'bus_id' => 'required|exists:buses_tabel,id',
            'jumlah_tiket' => 'required|integer|min:1',
            'tanggal_transaksi' => 'required|date|date_format:Y-m-d'
        ]);

        // Get the bus details to calculate total price
        $bus = Bus::findOrFail($data['bus_id']);
        $data['total'] = $bus->harga * $data['jumlah_tiket'];

        // Create a new transaction record
        Transaction::create($data);

        // Redirect to the transactions index page with success message
        return redirect()->route('transactions.index')->with('success', 'Transaction added successfully');
    }

    public function destroy(Transaction $transaction){
        $transaction->delete();
        return redirect(route('transactions.index'))->with('success', 'Ticket Deleted Succesfully');

    }

}
