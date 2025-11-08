@extends('layouts.app')

@section('title', 'Universitas Bumigora')

@section('content')
<article class="prose max-w-none">
    <h1 class="text-4xl font-extrabold text-gray-900 mb-4 border-b border-gray-300 pb-2">
        Universitas Bumigora
    </h1>
    <p class="text-lg text-gray-600 mb-8">
        Terkenal akan jurusan komputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB 🏆
    </p>

    <div class="mt-12 pt-6 border-t border-gray-200">
        <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-800 font-medium transition">
            ← kembali
        </a>
    </div>
</article>
@endsection
