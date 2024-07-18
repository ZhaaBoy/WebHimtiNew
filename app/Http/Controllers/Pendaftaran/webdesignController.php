<?php

namespace App\Http\Controllers\Pendaftaran;

use Illuminate\Http\Request;
use App\Models\Webdg;
use App\Models\Footer;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class webdesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $web = Webdg::simplepaginate(5);
        return view('web-design.index', compact('web'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footers = Footer::all();
        return view('web-design.create', compact('footers'));
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
            'nama_team' => 'string|required',
            'email' => 'string|required|',
            'nomor_telpon' => 'string|required|min:11|max:13',
            'pembayaran' => 'file|image|max:2048|',
        ]);



        $web = new Webdg;
        $web->nama_team = $request->nama_team;
        $web->email = $request->email;
        $web->nomor_telpon = $request->nomor_telpon;
        $web['pembayaran'] = $request->file('pembayaran')->store('asset/web', 'public');

        //  dd($web);
        // Mail::to($web->email)->send(new WebDesign($web->nama_team));

        if ($web->save()) {
            return redirect()->route('pendaftaran.sukses', encrypt($web->id));
        } else {
            alert()->error('Gagal');
            return back();
        };
    }
    public function sukses($id)
    {
        $dec = decrypt($id);
        $web = Webdg::findOrFail($dec);
        $footers = Footer::all();
        return view('web-design.sukses', compact('web', 'footers'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Webdg $wd)
    {
        return view('web-design.show', compact('wd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Webdg $wd)
    {
        return view('web-design.edit', compact('wd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Webdg $wd)
    {
        $dataId = $wd->find($wd->id);
        $data = $request->all();
        if ($request->pembayaran) {
            Storage::delete('public/' . $dataId->pembayaran);
            $data['pembayaran'] = $request->file('pembayaran')->store('asset/web', 'public');
        }

        if ($dataId->update($data)) {
            alert()->success("{$data['ketua_team']}", 'Berhasil Di Update');
            return to_route('wd.index');
        } else {
            alert()->error('Gagal');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webdg $wd)
    {
        Storage::delete('public/' . $wd->pembayaran);
        if ($wd->delete()) {
            alert()->success("{$wd['ketua_team']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
    }
