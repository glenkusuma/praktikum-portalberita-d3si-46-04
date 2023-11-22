@extends('layouts.main')
@section('page_title', 'Penyuntingan')
@section('content')
    <h1 class="display-3 mb-4 ">Penyuntingan</h1>
    <x-table-component :$data />
@endsection
