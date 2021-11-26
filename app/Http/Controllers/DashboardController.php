<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftar_total = Peserta::all()->count();
        $peserta_pending = Peserta::where('status_id', 1)->count();
        $peserta_sukses = Peserta::where('status_id', 2)->count();
        $peserta_gagal = Peserta::where('status_id', 3)->count();
        $saintek_sukses = Peserta::where('rumpun_id', 1)->where('status_id', 2)->count();
        $soshum_sukses = Peserta::where('rumpun_id', 2)->where('status_id', 2)->count();

        return view('dashboard.index', [
            'view_pendaftar_total' => $pendaftar_total,
            'view_peserta_pending' => $peserta_pending,
            'view_peserta_sukses' => $peserta_sukses,
            'view_peserta_gagal' => $peserta_gagal,
            'view_saintek_sukses' => $saintek_sukses,
            'view_soshum_sukses' => $soshum_sukses

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}
