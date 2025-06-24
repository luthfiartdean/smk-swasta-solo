@extends('layouts.app')

@section('title', $smk->nama)

@section('content')
    <h1 class="title">{{ $smk->nama }}</h1>
    <div class="card">
            <div class="card-image">
                <figure class="image is-16by9">
                    <img src="{{ asset('storage/' . $smk->fotos->first()->foto) }}" alt="{{ $smk->nama }}">
                </figure>
    <div class="content">
        <p><strong>Alamat:</strong> {{ $smk->alamat }}</p>
        <p><strong>Rentang Biaya:</strong> {{ $smk->rentang_biaya }}</p>
        <p><strong>Sejarah:</strong> {{ $smk->sejarah }}</p>
    </div>
    <div class="field">
        <a href="{{ route('smk.index') }}" class="button is-link">Kembali</a>
    </div>
@endsection
