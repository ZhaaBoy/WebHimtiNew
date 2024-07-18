<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Startup;
use App\Models\Footer;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class startupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sr = Startup::simplepaginate(5);
        return view('sr.index', compact('sr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footers = Footer::all();
        return view('sr.create', compact('footers'));
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
            'nama_pendaftar' => 'string|required',
            'nama_team' => 'string|required',
            'email' => '|required|email|unique:startups',
            'anggota_1' => 'string|required|unique:startups',
            'anggota_2' => 'string|required|unique:startups',
            'nama_sekolah' => 'string|required',
            'no_hp' => 'string|required|min:11|max:13',
            // 'tema_lomba' => '',
            'pembayaran' => 'required|file|image|max:2048',
            // 'project' => 'required|mimes:pdf|max:10000'
        ]);

        $sr = new Startup;
        $sr->nama_pendaftar = $request->nama_pendaftar;
        $sr->email = $request->email;
        $sr->nama_team = $request->nama_team;
        $sr->anggota_1 = $request->anggota_1;
        $sr->anggota_2 = $request->anggota_2;
        $sr->no_hp = $request->no_hp;
        $sr->nama_sekolah = $request->nama_sekolah;
        // $sr->tema_lomba = $request->tema_lomba;
        $sr['pembayaran'] = $request->file('pembayaran')->store('asset/sr', 'public');
        // $sr['project'] = $request->file('project')->store('asset/srpr', 'public');

        // Mail::to($sr->email)->send(new StartUp($sr->nama_sekolah));

        if ($sr->save()) {
            return redirect()->route('sri-sukses', encrypt($sr->id));
        } else {
            alert()->error('Gagal');
            return back();
        };
    }

    public function suksesStartUp($id)
    {
        $dec = decrypt($id);
        $sr = Startup::findOrFail($dec);
        $footers = Footer::all();
        return view('sr.sukses', compact('sr', 'footers'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sr)
    {
        // return view('sr.show', compact('sr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Startup $sr)
    {
        return view('sr.edit', compact('sr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Startup $sr)
    {
        $dataId = $sr->find($sr->id);
        $data = $request->all();
        if ($request->pembayaran) {
            Storage::delete('public/' . $dataId->pembayaran);
            $data['pembayaran'] = $request->file('pembayaran')->store('asset/', 'public');
        }

        if ($dataId->update($data)) {
            alert()->success("{$data['nama_pendaftar']}", 'Berhasil Di Update');
            return to_route('sr.index');
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
    public function destroy(Startup $sr)
    {
        Storage::delete('public/' . $sr->pembayaran);
        if ($sr->delete()) {
            alert()->success("{$sr['ketua_team']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
    }
