@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Detail Artikel')
@section('menuArtikel', 'active')
@section('content')

    <section id="speakers-details">
        <div class="container">
            <div class="section-header text-center pb-3">
                    <h2 class="text-black"><b>Detail Artikel</b></h2>
                <hr width="30%">
            </div>
            <!--<div class="row">-->
                <div class="col-md-12 d-flex justify-content-center">
                    <img src="{{ Storage::url($artikel->image) }}" alt="gambar" class="img-fluid">
                </div>

                <!--<div class="col-md-6 justify-content-center">-->
                <!--    <div class="align-items-lg-center"><br><br><br>-->
                <!--        <h4>{{ $artikel->tittle }}</h4>-->
                <!--    </div>-->
                <!--</div>-->
            <!--</div>-->
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
                                <h5>{!!$artikel->deskripsi!!}</h5>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection