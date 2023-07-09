<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Alternatif;

class HitungController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');

        $bobot1 = 3/$kriteria;
        $bobot2 = 2/$kriteria;
        $bobot3 = 2/$kriteria;
        $bobot4 = 2/$kriteria;
        $bobot5 = 1/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];


        $alternatif = Alternatif::get();
        $data = Alternatif::orderby('nama', 'asc')->get();

        $minC1 = Alternatif::min('C1');
        $maxC1 = Alternatif::max('C1');
        $minC2 = Alternatif::min('C2');
        $maxC2 = Alternatif::max('C2');
        $minC3 = Alternatif::min('C3');
        $maxC3 = Alternatif::max('C3');
        $minC4 = Alternatif::min('C4');
        $maxC4 = Alternatif::max('C4');
        $minC5 = Alternatif::min('C5');
        $maxC5 = Alternatif::max('C5');

        $C1min =[
            'alternatifs' => $minC1,
        ];
        $C1max =[
            'alternatifs' => $maxC1,
        ];
        $C2min =[
            'alternatifs' => $minC2,
        ];
        $C2max =[
            'alternatifs' => $maxC2,
        ];
        $C3min =[
            'alternatifs' => $minC3,
        ];
        $C3max =[
            'alternatifs' => $maxC3,
        ];
        $C4min =[
            'alternatifs' => $minC4,
        ];
        $C4max =[
            'alternatifs' => $maxC4,
        ];
        $C5min =[
            'alternatifs' => $minC5,
        ];
        $C5max =[
            'alternatifs' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatifs' => $hasil,
        ];

        return view('admin.saw.hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }
}

