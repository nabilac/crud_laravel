@extends('layouts.adminlay')

@section('content')
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Dashboard</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <a href="{{ url('data/create')}}" class="btn btn-primary nb-3">
                                + Tambah Data Baru
                                </a>
                                <br/>
                                <br/>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $datas)
                                            <tr>
                                                <td>{{$datas->id}}</td>
                                                <td>{{$datas->name}}</td>
                                                <td>
                                                    <a href="/data/edit/{{ $datas->id }}">Edit</a>
                                                    |
                                                    <a href="/data/hapus/{{ $datas->id }}">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection
