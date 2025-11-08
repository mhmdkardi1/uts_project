@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center g-4">

        <!-- Kartu JulHadi -->
        <div class="col-md-5">
            <div class="card h-100 shadow-sm border">
                <img src="{{ asset('images/kardi.png') }}" class="card-img-top" alt="JulHadi">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Sukardi ALamsyah</h5>
                    <p class="card-text mb-2">begandang is in my blood cause all the projects won't solve itself 😎</p>
                    <p class="text-muted small mb-0">2201040005</p>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
