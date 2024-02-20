@extends('master')

@section('content')
<h1>Cancion</h1>
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
      <tr>
        <td>{{ $song->name }}</td>
        <td>{{ $song->duration }}</td>
        <td>{{ $song->order }}</td>
        <td>{{ $song->album->name }}</td>
        <td>{{ $song->album->artist->name }}</td>
      </tr>
  </tbody>
</table>
@endsection