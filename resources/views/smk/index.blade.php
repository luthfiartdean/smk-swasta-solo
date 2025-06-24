@extends('layouts.app')

@section('title', 'Info SMK Swasta di Solo')

@section('content')
    <h1 class="title">Daftar SMK Swasta di Solo</h1>
    @foreach ($smks as $smk)
        <div class="card">
                    <div class="card-content columns">
                        <div class="column is-one-quarter">
                            <figure class="image is-4by3">
                                <img src="{{ asset('storage/' . $smk->fotos->first()->foto) }}" alt="{{ $smk->nama }}">
                            </figure>
                        </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">{{ $smk->nama }}</p>
                        <p class="subtitle is-6">{{ $smk->created_at->format('F d, Y') }}</p>
                    </div>
                </div>
                <div class="content">
                    <p>{{ $smk->alamat }}</p>
                    <a href="{{ route('smk.show', $smk->id) }}" class="button is-link">Read more</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
