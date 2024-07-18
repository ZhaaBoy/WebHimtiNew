<?php

namespace App\Http\Controllers\Pendaftaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\seminar;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminar = seminar::simplepaginate(5);
        return view('seminar.index', compact('seminar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footers = Footer::all();
        return view('seminar.create', compact('footers'));
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
            'email' => '|required|email|unique:seminars',
            'no_hp' => 'string|required|min:11|max:13',
        ]);

        $seminar = new seminar;
        $seminar->nama = $request->nama;
        $seminar->email = $request->email;
        $seminar->no_hp = $request->no_hp;

        // Mail::to($seminar->email)->send(new StartUpInovation($seminar->nama_sekolah));

        if ($seminar->save()) {
            return redirect()->route('seminar-sukses', encrypt($seminar->id));
        } else {
            alert()->error('Gagal');
            return back();
        };
    }

    public function suksesSeminar($id)
    {
        $dec = decrypt($id);
        $seminar = seminar::findOrFail($dec);
        $footers = Footer::all();
        return view('seminar.sukses', compact('seminar', 'footers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(seminar $seminar)
    {
        // return view('seminar.show', compact('seminar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(seminar $seminar)
    {
        return view('seminar.edit', compact('seminar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seminar $seminar)
    {
        $validasi = $request->validate([

            'nama' => 'required|string',
            'no_hp' => 'required|min:11|max:13|string',
            'email' =>  'required|email|string|unique:seminars,email,' . $seminar->id,

        ]);

        if ($seminar->update($validasi)) {
            alert()->success("{$validasi['nama']}", 'Berhasil Di Update');
            return to_route('seminar.index');
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
    public function destroy(seminar $seminar)
    {
        if ($seminar->delete()) {
            alert()->success("{$seminar['nama']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
