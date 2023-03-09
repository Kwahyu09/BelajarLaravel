@extends('layout.main')
@section('container')
    <!-- Section-->
        <section class="py-5">
            <h1 class="text-center mb-5">Detail Buket</h1>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-16 mb-3">
                        <div class="card h-100 text-center">
                            <div class="text-center mt-3">
                                <img src="img/hadiat.png" width="200 px" alt="Buket Balon">
                            </div>
                            <h5 class="fw-bolder">Buket Biasa 25 Tangkai</h5>
                            <p>Harga : &nbsp; 100.000 <br>
                                Jumlah Kelopak : &nbsp; 25 <br>
                                Jumlah Tangkai : &nbsp; 25 <br>
                                Free Greting Card <br>
                                Free Pita
                            </p>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/daftar">Kembali</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection