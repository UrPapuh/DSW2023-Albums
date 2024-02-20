@extends('master')

@section('content')
<h1>Listado de Albumes</h1>
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Año</th>
      <th>Artista</th>
      <th>Canciones</th>
      <th>Numero de Canciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($albums as $album)
      <tr>
        <td>
          <a href="{{ route('album.show', $album) }}">{{ $album->name }}</a>
        </td>
        <td>{{ $album->year }}</td>
        <td>{{ $album->artist->name }}</td>
        <td>
          <ul>
            @foreach($album->songs as $song)
              <li>
                <a href="{{ route('song.show', $song) }}">{{ $song->name }}</a>
              </li>
            @endforeach
          </ul>
        </td>
        <td>{{ $album->numSongs() }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection