<?php

namespace App\Http\Controllers\Pendaftaran;

use PDF;
use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\bootcamp;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\Bootcamp2023;



class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = bootcamp::all()->count();
        $btcmp1 = bootcamp::simplepaginate(5);
        return view('pendaftaran.bootcamp.index', compact('btcmp1','peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footers = Footer::all();
        return view('pendaftaran.bootcamp.create', compact('footers'));
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
            'nama' => 'string|required',
            'nim' => 'string|required|unique:bootcamps|max:12',
            'kelas' => 'string|required|',
            'email' => 'string|required|unique:bootcamps|email:dns',
            'angkatan' => 'string|required|',
            'organ' => 'string|required|',
            'tgl_lahir' => 'string|required|',
            'alamat' => 'string|required|',
            'no_hp' => 'string|required|min:11|max:13',
            'no_kel' => 'string|required|min:11|max:13',
            'pembayaran' => 'required|file|image|max:2048'
        ]);


        $btcmp1 = new bootcamp();
        $btcmp1->nama = $request->nama;
        $btcmp1->nim = $request->nim;
        $btcmp1->angkatan = $request->angkatan;
        $btcmp1->email = $request->email;
        $btcmp1->organ = $request->organ;
        $btcmp1->kelas = $request->kelas;
        $btcmp1->tgl_lahir = $request->tgl_lahir;
        $btcmp1->alamat = $request->alamat;
        $btcmp1->no_hp = $request->no_hp;
        $btcmp1->no_kel = $request->no_kel;
        $btcmp1['pembayaran'] = $request->file('pembayaran')->store('asset/bootcamp23', 'public');

        // dd($btcmp1);
        
        Mail::to($btcmp1->email)->send(new Bootcamp2023($btcmp1->nama));

        if ($btcmp1->save()) {
            return redirect()->route('btcmps-sukses', encrypt($btcmp1->id));
        } else {
            alert()->error('Gagal');
            return back();
        };
    }

    public function berhasil($id)
    {
        $dec = decrypt($id);
        $btcmp1 = bootcamp::findOrFail($dec);
        $footers = Footer::all();
        return view('pendaftaran.bootcamp.sukses', compact('btcmp1', 'footers'));
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
    public function edit(bootcamp $btcmp)
    {
        return view('pendaftaran.bootcamp.edit', compact('btcmp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,bootcamp $btcmp)
    {
        $dataId = $btcmp->find($btcmp->id);
        $data = $request->all();
        if ($request->pembayaran) {
            Storage::delete('public/' . $dataId->pembayaran);
            $data['pembayaran'] = $request->file('pembayaran')->store('asset/', 'public');
        }

        if ($dataId->update($data)) {
            alert()->success("{$data['nama']}", 'Berhasil Di Update');
            return to_route('btcmp.index');
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
    public function destroy(bootcamp $btcmp)
    {
        Storage::delete('public/' . $btcmp->pembayaran);
        if ($btcmp->delete()) {
            alert()->success("{$btcmp['nama']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
    
    public function pdf()
    {
        $btcmp1 = bootcamp::all();
        $pdf = PDF::loadview('pendaftaran.bootcamp.cetak', compact('btcmp1'))->setPaper('A2', 'landscape');
        return $pdf->download('Data-peserta-bootcamp-2023.pdf');
        // return $pdf->stream();
    }
}
