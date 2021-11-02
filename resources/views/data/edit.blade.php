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
                                @foreach($data as $datas)
                                <form action="{{ url('data/update')}}" method="post">
		                            {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $datas->id }}"> <br/>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ $datas->name }}">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
@endsection
