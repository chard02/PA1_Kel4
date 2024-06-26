@extends('admin.layouts.admin')

@section('title', 'Tambah Pengumuman')

@section('content')

    <div class="card" style="width:75%; margin:3% 2px 0px 5%;">
        <div class="card-header">
            <h3 class="card-title">Add New Informasi</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.informasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.informasi._form')
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

@endsection
