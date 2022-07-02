@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/warga/create">Add Data</a>
        <table class="table table-success table-striped">
<tr>
<th>nama</th>
<th>nomor</th>
<th>no kk</th>
<th>jenis kelamin</th>
<th>ALAMAT</th>
</tr>
@foreach ($warga as $sw)
<tr>
<td>{{$sw->nama}}</td>
<td>{{$sw->nik}}</td>
<td>{{$sw->no_kk}}</td>
<td>{{$sw->jenis_kelamin}}</td>
<td>{{$sw->alamat}}</td>
<td>
<div class="btn-group" role="group" aria-label="Basic example">    
                        <a class="btn btn-warning" href="/warga/{{$sw->id}}/edit">Edit</a>
                            <form action="/warga/{{$sw->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" name="submit" value="Delete" onclick="confirm('Sure?')">
                            </form>
                    </div>
                    </td>
                </tr>
        @endforeach
    </table>
        </div>
@endsection