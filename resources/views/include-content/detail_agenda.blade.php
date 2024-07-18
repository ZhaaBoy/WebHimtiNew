@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Detail Agenda')
@section('menuAgenda', 'active')
@section('content')

    <section id="speakers-details">
        <div class="container">
            <div class="section-header text-center pb-5">
        <h2 class="text-black"><b>Detail Agenda</b></h2>
                <hr width="30%">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Storage::url($agenda->image) }}" alt="Speaker 1" class="img-fluid">
                </div>
                <div class="col-md-6 justify-content-center">
                    <div class="align-items-lg-center"><br><br><br>
                    <h2 class="text-black"><b>{{ $agenda->tittle }}</b></h2>
                        <h6>Himpunan Mahasiswa Teknik Informatika Universitas Muhammadiyah Tangerang akan mengadakan
                            kegiatan {{ $agenda->tittle }}
                        </h6>

                        <h6><b>Hari : {{ $agenda->jadwal }}</b></h6>
                        <h6><b>Lokasi : {{ $agenda->lokasi }}</b></h6>
                        <h6><b>Pengisi Acara : {{ $agenda->pengisi_acra }}</b></h6>

                    </div>
                    {{-- <button class="btn btn-info" data-target="#exampleModal" data-toggle="modal">Daftar Sekarang</button> --}}
                </div>
            </div>
        </div>
    </section>
    <section id="speakers-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <div class="align-items-lg-center"><br><br><br>
                      <h2 class="text-black"><b>Detail Deskripsi</b></h2>
                        <article class="article" style="box-shadow: none">
                            <div class="article-detail pt-4 text-dark">
                                <h5>{!!$agenda->deskripsi!!}</h5>
                            </div>
                        </article>

                        {{-- <h5>Dengan mengambl Tema, <b> "HOW TO BUILD WEBSITE COMPANY PROFILE WITH LARAVEL FRAMEWORK?"</b></h5> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
