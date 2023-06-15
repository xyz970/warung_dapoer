<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\transaksi;
class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function pelanggan()
    {
        $jumlahPelanggan = pelanggan::count();

        return response()->json(['jumlahPelanggan' => $jumlahPelanggan]);

    }

    public function order()
    {
        $jumlahorder = transaksi::count();

        return response()->json(['jumlahorder' => $jumlahorder]);

    }

    public function pendapatan()
    {
        $jumlahpendapatan = transaksi::sum('total_transaksi');

        return response()->json(['jumlahpendapatan' => $jumlahpendapatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
