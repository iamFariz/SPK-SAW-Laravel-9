<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mobil;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\MobilStoreRequest;
use App\Http\Requests\Admin\MobilUpdateRequest;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Carbon;


class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = Mobil::latest()->get();
        return view('admin.mobils.index', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MobilStoreRequest $request,)
    {
        if($request->validated()){
            $gambar = $request->file('gambar')->store('assets/mobil', 'public');
            $slug = Str::slug($request->nama,'-');

            Mobil::create($request->except('gambar') + ['gambar'=> $gambar, 'slug' => $slug]);
        }
        return redirect()->route('mobils.index')->with([
            'message'=> 'Data Berhasil DiTambahkan',
            'alert-type' => 'success'
        ]);
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
    public function edit(Mobil $mobil)
    {
        return view('admin.mobils.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MobilUpdateRequest $request, Mobil $mobil)
    {
        if($request->validated()){
            $slug = Str::slug($request->nama,'-');
            $mobil->update($request->validated()+['slug'=> $slug]);
            // if($request-> gambar){
            //     File::delete('storage/' .$mobil->gambar);
            // }
            // $mobilGambar = $request->file('gambar')->store(
            //     'assets/mobil', 'public'
            // );
            // $mobil ->update($request->except('gambar')+['gambar'=>$mobilGambar]);
        }
        return redirect()->route('mobils.index')->with([
            'message'=> 'Data Berhasil DiEdit',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        if($mobil->gambar){
            unlink('storage/' . $mobil->gambar);
        }
        $mobil->delete();
        return redirect()->back()->with([
            'message'=> 'Data Berhasil DiHapus',
            'alert-type' => 'danger'
        ]);
    }

}
