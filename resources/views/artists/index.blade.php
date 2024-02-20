@extends('master')

@section('content')
<h1>Listado de Artistas</h1>
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Albumes</th>
      <th>Numero de albumes</th>
      <th>Numero de canciones</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($artists as $artist)
      <tr>
        <td>{{ $artist->name }}</td>
        <td>
          <ul>
            @foreach($artist->albums as $album)
              <li>
                <a href="{{ route('album.show', $album) }}">{{ $album->name }}</a>
              </li>
            @endforeach
          </ul>
        </td>
        <td>{{ $artist->numAlbums() }}</td>
        <td>{{ $artist->numSongs() }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection