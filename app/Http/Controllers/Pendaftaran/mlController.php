<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Models\MobileLegends;
use App\Http\Controllers\Controller;
use App\Mail\HifestMobileLegends2023;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;



class mlController extends Controller
{
    public function create()
    {
        $footers = Footer::all();
        return view('ml.create', compact('footers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pendaftar' => 'string|required',
            'nama_team' => 'string|required',
            'email' => '|required|email|unique:mobile_legends',
            'nama_leader' => 'string|required',
            'team_1' => 'string|required|unique:mobile_legends',
            'team_2' => 'string|required|unique:mobile_legends',
            'team_3' => 'string|required|unique:mobile_legends',
            'team_4' => 'string|required|unique:mobile_legends',
            'team_5' => 'string|required|unique:mobile_legends',
            'cadangan_2' => 'string|required|unique:mobile_legends',
            'cadangan_2' => 'string|required|unique:mobile_legends',
            'nomor_telpon' => 'string|required|min:11|max:13',
            'pembayaran' => 'file|image'
        ]);
        
       

        $ml = new MobileLegends;
        $ml->nama_pendaftar = $request->nama_pendaftar;
        $ml->email = $request->email;
        $ml->nama_team = $request->nama_team;
        $ml->nama_leader = $request->nama_leader;
        $ml->team_1 = $request->team_1;
        $ml->team_2 = $request->team_2;
        $ml->team_3 = $request->team_3;
        $ml->team_4 = $request->team_4;
        $ml->team_5 = $request->team_5;
        $ml->cadangan_1 = $request->cadangan_1;
        $ml->cadangan_2 = $request->cadangan_2;
        $ml->nomor_telpon = $request->nomor_telpon;
        $ml['pembayaran'] = $request->file('pembayaran')->store('asset/ml', 'public');
        
        //  dd($ml);

        Mail::to($ml->email)->send(new HifestMobileLegends2023($ml->nama_team));

        if ($ml->save()) {
            return redirect()->route('mls-sukses', encrypt($ml->id));
        } else {
            alert()->error('Gagal');
            return back();
        };
    }

    public function suksesMobileLegends($id)
    {
        $dec = decrypt($id);
        $ml = MobileLegends::findOrFail($dec);
        $footers = Footer::all();
        return view('ml.sukses', compact('ml', 'footers'));
    }
}
