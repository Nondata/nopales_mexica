@extends('livewire.modulos-recepcion.home')
@section('content')
    @livewire('modulos-recepcion.home-recepcion', ['nombre' => $nombre])
@endsection