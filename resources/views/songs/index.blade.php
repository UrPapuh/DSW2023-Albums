@extends('master')

@section('content')
<h1>Listado de Canciones</h1>
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Duracion</th>
      <th>Orden</th>
      <th>Album</th>
      <th>Artista</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($songs as $song)
      <tr>
        <td>
          <a href="{{ route('song.show', $song) }}">{{ $song->name }}</a>
        </td>
        <td>{{ $song->duration }}</td>
        <td>{{ $song->order }}</td>
        <td>{{ $song->album->name }}</td>
        <td>{{ $song->album->artist->name }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection