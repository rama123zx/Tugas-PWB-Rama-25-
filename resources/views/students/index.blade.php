@extends('layout/main')

@section('title', 'Daftar Siswa')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 class="mt-3">Daftar Siswa</h1>

                    <a href="/students/create" class="btn btn-primary my-3" >Tambah Data Siswa</a>

                    <ul class="list-group">
                        @foreach( $students as $students )
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $students->nama }}
                            <a href="/students/{{ $students->id }}" class="badge badge-info">Detail</a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
@endsection
