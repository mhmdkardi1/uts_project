@extends('layouts.app')

@section('content')
<h1 class="fw-bold">{{ $post['title'] }}</h1>
<p class="mb-3">{{ $post['body'] }}</p>

<a href="/post" class="btn btn-outline-secondary">← Kembali</a>
@endsection
