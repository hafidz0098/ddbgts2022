<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Exports\PesertaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.peserta-pending.index', [
            'pesertas' => Peserta::where('status_id', '1')->orderBy('created_at', 'desc')->get(),
            'statuses' => Status::all()
        ]);
    }

    public function pesertaexport(){
        return Excel::download(new PesertaExport, 'peserta.xlsx');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'status_id' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Peserta::find($id)->update($validatedData);

        return redirect('/dashboard/peserta-pending')->with('success', 'Peserta has been updated!');
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
