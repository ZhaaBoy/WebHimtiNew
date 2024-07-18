@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Pendaftaran Sukses')
@section('pendaftaran', 'active')
@section('content')

    <section class="section">
        <div class="container mt-2">
            <div class="page-error">
                <div class="page-inner text-center">
                    <h1 class="text-bold text-dark">Berhasil</h1>
                    <div class="page-description">
                        Terima Kasih <b>{{ $kb->nama }}</b> Sudah Mendaftar <i class="text-dark text-bold">Kelompok
                            Belajar <b>{{ $kb->bidang }}</b></i>
                            <i class="text-dark text-bold">Semangat dan Tetap Konsisten Dalam Menjalaninya</i>
                        
                    </div>
                    <div class="page-search contact-details mt-5">
                        <h4>Untuk informasi lebih lanjut, silahkan hubungi:</h4>
                        <h5><a href="https://www.instagram.com/himtiumt/" class="text-dark" style="text-decoration: none;"><i
                                    class="mdi mdi-instagram"> @himtiumt</i> </a></h5>
                        <h5><a href="https://api.whatsapp.com/send?phone=6289630626130" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> 089630626130 (Deril)</i> </a></h5>

                        <hr>
                        <h4 class="mt-5">Silakan masuk ke dalam grup sesuai dengan bidang yang di isi.</h4>
                        <h5><a href="https://chat.whatsapp.com/L2l71SgIE0DD46t2FRCRus" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> Kelompok Belajar Android </i></a></h5>
                        <h5><a href="https://chat.whatsapp.com/CJiifdkG5vNJTU2K3Gj7Yi" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> Kelompok Belajar Jaringan </i></a></h5>
                        <h5><a href="https://chat.whatsapp.com/I61Lkrz3xNWHIUofOkL5q2" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> Kelompok Belajar Web </i></a></h5>
                        <h5><a href="https://chat.whatsapp.com/HwRGlcLAmiHF2pO6kR6DZQ" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> Kelompok Belajar Design </i></a></h5>
                        <hr>
                        <h4>Subscribe Youtube HIMTI-UMT</h4>
                        <h5><a href="https://www.youtube.com/channel/UCiIhUjjcEp4S_kOvQU_BW8A" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-arrow-right-drop-circle"> HiTV</i></a></h5>
                    </div>
                    <div class="mt-3 btn btn-primary">
                        <a href="{{ route('home') }}">Back to
                            Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
