@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pelanggan {{ $pelanggan->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/pelanggan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pelanggan/' . $pelanggan->id . '/edit') }}" title="Edit pelanggan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('pelanggan' . '/' . $pelanggan->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pelanggan" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pelanggan->id }}</td>
                                    </tr>
                                    <tr><th> Namapelanggan </th>
                                    <td> {{ $pelanggan->namapelanggan }} </td></tr>
                                    <tr><th> Alamat </th><td> {{ $pelanggan->alamat }} </td></tr>
                                    <tr><th> Jeniskelamin </th>
                                    <td> {{ $pelanggan->jeniskelamin }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
