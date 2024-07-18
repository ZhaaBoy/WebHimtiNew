<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MobileLegends;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class MobilelegendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ml = MobileLegends::orderBy('created_at', 'desc')->simplepaginate(5);
        return view('ml.index', compact('ml'));
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
    public function show(MobileLegends $ml)
    {
        return view('ml.show', compact('ml'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileLegends $ml)
    {
        return view('ml.edit', compact('ml'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileLegends $ml)
    {
        $dataId = $ml->find($ml->id);
        $data = $request->all();
        if ($request->pembayaran) {
            Storage::delete('public/' . $dataId->pembayaran);
            $data['pembayaran'] = $request->file('pembayaran')->store('asset/ml', 'public');
        }

        if ($dataId->update($data)) {
            alert()->success("{$data['nama_team']}", 'Berhasil Di Update');
            return to_route('ml.index');
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
    public function destroy(MobileLegends $ml)
    {
        Storage::delete('public/' . $ml->pembayaran);
        if ($ml->delete()) {
            alert()->success("{$ml['nama_team']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
