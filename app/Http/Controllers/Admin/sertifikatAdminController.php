<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Models\sertifikat;
use App\Models\Footer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class sertifikatAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function validation(){
        $footers = Footer::all();
        return view('include-content.sertifikat', compact('footers'));
    }
    public function index()
    {
        $sertifikats = sertifikat::orderBy('created_at', 'desc')->simplepaginate(5);
        return view('dashboard.sertifikat.seminar_akademik.index', compact('sertifikats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sertifikat.seminar_akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sertif = sertifikat::latest()->first();
        $kodeHimti = "HIMTI";

        if($sertif == null){
            $noUrut = "0001";
        }else{
            // $noUrut = (int)substr($sertif->qrcode, 5 , 4) +1;
            $explode = explode("-", $sertif->qrcode);
            $noUrut = intval($explode[1])+1;
            $noUrut = str_pad($noUrut, 4, "0", STR_PAD_LEFT);
        }
        $kodeSertif = "$kodeHimti-$noUrut";
        // $qr = Str::random(20);
        $validasi = $request->validate([
            'nama_peserta' => 'required|string',
            'nim' => 'required|min:10|max:10|string|unique:sertifikats',
            'qrcode' => '',

        ]);

        sertifikat::create([
            'nama_peserta' => request('nama_peserta'),
            'nim' => request('nim'),
            'qrcode' => $kodeSertif
        ]);
        alert()->success("{$validasi['nama_peserta']}", 'Berhasil Di Tambah');
        return to_route('sertifikat.index');
// Kode Baru
        // $sertif = sertifikat::latest()->first();
        // $kodeHimti = "HIMTI";

        // if($sertif == null){
        //     $noUrut = "001";
        // }else{
        //     $noUrut = substr($sertif->qrcode, 9,4)+1;
        //     $noUrut = "000" . $noUrut;

        // }
        // $kodeSertif = $kodeHimti . $noUrut;
        // $requestData = $request->validated();
        // $requestData['qrcode'] = $kodeSertif;
        // sertifikat::create($requestData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(sertifikat $sertifikat)
    {
        return view('dashboard.sertifikat.seminar_akademik.show', compact('sertifikat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(sertifikat $sertifikat)
    {
        return view('dashboard.sertifikat.seminar_akademik.edit', compact('sertifikat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sertifikat $sertifikat)
    {
        $validasi = $request->validate([
            'nama_peserta' => 'required|string',
            'nim' => 'required|min:10|max:10|string|unique:sertifikats,nim,' . $sertifikat->id,
            'qrcode' => ''


        ]);

        if ($sertifikat->update($validasi)) {
            alert()->success("{$validasi['nama_peserta']}", 'Berhasil Di Tambah');
            return to_route('sertifikat.index');
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
    public function destroy(sertifikat $sertifikat)
    {
        if ($sertifikat->delete()) {
            alert()->success("{$sertifikat['nama_peserta']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }

    public function pdf($id)
    {
        // $ser = request()->id;
        // $sertifikats = sertifikat::firstwhere('id', $ser);
        $sertifikat = sertifikat::where('id', $id)->first();
        set_time_limit(300); // Extends to 5 minutes.

        $pdf = PDF::loadview('dashboard.sertifikat.seminar_akademik.cetak', compact('sertifikat'))->setPaper('A4', 'landscape');
        // $pdf = PDF::loadview('dashboard.sertifikat.seminar_akademik.cetak_sertifikat', compact('sertifikat'))->setPaper('A1', 'landscape');
        // dd($pdf);
        return $pdf->download('Sertifikat.pdf');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        // mengambil data dari table pegawai sesuai pencarian data
        $sertifikat = sertifikat::where('qrcode', 'like', "%" . $cari . "%");
        $footers = Footer::all();
        return view('include-content.sertifikat', compact('footers','sertifikat'));
    }
}
