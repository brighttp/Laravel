@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
