@extends('layout')

@section('content')
    <table class="table table-dark table-hover">
        <thead>
            <th class="col">NIM</th>
            <th class="col">NAMA</th>
            <th class="col">ACTION</th>
        </thead>
        <tbody>
            @foreach($students as $item)
                <tr>
                    <td>{{$item['nim']}}</td>
                    <td>{{$item['nama']}}</td>
                    <td><button type="button" class="btn btn-warning"><a href="#" class="text-decoration-none text-white">Detail</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
