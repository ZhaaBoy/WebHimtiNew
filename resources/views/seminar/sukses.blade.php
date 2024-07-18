@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Seminar HIFEST 2023 Sukses/')
@section('pendaftaran', 'active')
@section('content')

    <section class="section">
        <div class="container mt-2">
            <div class="page-error">
                <div class="page-inner text-center">
                    <h1 class="text-bold text-dark">Berhasil</h1>
                    <div class="page-description">
                        Terima Kasih <b>{{ $seminar->nama }}</b> Sudah Mendaftar <i class="text-dark text-bold">SEMINAR HIFEST 2023</i>
                    </div>
                    <br>
                    <div class="page-search contact-details">
                        <h4>Untuk informasi lebih lanjut, Silahkan bergabung ke Grup ini</h4>
                        <h4><a href="https://chat.whatsapp.com/GxT4MmUXmVL0mPuLw7l2Kn" class="text-dark"
                            style="text-decoration: none;"><i class="mdi mdi-whatsapp"><b>Grup Seminar Hifest 2023</b></i>
                        </a></h4>
                        <h5><a href="https://www.instagram.com/himtiumt/" class="text-dark" style="text-decoration: none;"><i
                            class="mdi mdi-instagram"> @himtiumt</i> </a></h5>
                <h5><a href="https://api.whatsapp.com/send?phone=6281298966696" class="text-dark"
                        style="text-decoration: none;"><i class="mdi mdi-whatsapp"> 081298966696 (Agung)</i>
                    </a></h5>
                <h5><a href="https://api.whatsapp.com/send?phone=62895636000163" class="text-dark"
                        style="text-decoration: none;"><i class="mdi mdi-whatsapp"> 0895636000163 (Ridwan)</i></a></h5>
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
