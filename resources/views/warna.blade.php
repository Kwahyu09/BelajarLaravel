@extends('layout.main')
@section('container')
    <!-- Section-->
        <section class="py-5" id="warna">
				<h1 class="text-center mb-5">{{ $title }}</h1>
                @foreach ( $posts as $post)
                @endforeach
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
                    @foreach ($posts as $p)
                    <div class="col-md-12 mb-5">
                        <div class="card h-100">
							<!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{ $p->status }}</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/warna/{{ $p->warna }}.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $p->judul }}</h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
				</div>
        </section>
@endsection