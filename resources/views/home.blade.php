@extends('layouts.app')

@section('content')
<div class="row g-4">

    @php
        $universitas = [
            [
                'nama' => 'Universitas Bumigora',
                'deskripsi' => 'Terkenal akan jurusan komputernya yang tiada duanya, selalu menenangi kejuaraan komputer di daerah NTB 🥇',
                'gambar' => 'ubgg.jpg'
            ],
            [
                'nama' => 'Universitas Mataram',
                'deskripsi' => 'Unram saat ini menjadi salah satu perguruan tinggi negeri unggul dengan peningkatan kualitas penyelenggaraan pendidikan yang signifikan. 🎓',
                'gambar' => 'unrammm.jpeg'
            ],
            [
                'nama' => 'UIN (State Islamic University of Mataram)',
                'deskripsi' => 'Perguruan tinggi Islam negeri di Indonesia yang menyelenggarakan pendidikan akademik pada sejumlah disiplin ilmu pengetahuan, termasuk studi keislaman. 🕌',
                'gambar' => 'uin.jpg'
            ],
            [
                'nama' => 'Undikma (Universitas Pendidikan Mandalika)',
                'deskripsi' => 'Pada tanggal 2 Agustus 2019 Institut Keguruan dan Ilmu Pendidikan (IKIP) Mataram bergabung dengan Universitas Nusa Tenggara Barat. 📘',
                'gambar' => 'undikma.jpg'
            ],
            [
                'nama' => 'Universitas Nahdlatul Wathan Mataram',
                'deskripsi' => 'Sebuah perguruan tinggi swasta di bawah organisasi kemasyarakatan terbesar di NTB, Nahdlatul Wathan. 🌿',
                'gambar' => 'unw.jpg'
            ],
            [
                'nama' => 'Unizar (Universitas Islam Al-Azhar)',
                'deskripsi' => 'Unizar merupakan salah satu perguruan tinggi Islam swasta terbaik di kawasan Turida dan sekitarnya. 🏫',
                'gambar' => 'unizar.webp'
            ],
        ];
    @endphp

    @foreach ($universitas as $u)
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <img src="{{ asset('images/' . $u['gambar']) }}" class="card-img-top" alt="{{ $u['nama'] }}">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">{{ $u['nama'] }}</h5>
                <p class="card-text">{{ $u['deskripsi'] }}</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Read More →</a>



            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
