@extends('master')

@section('content')
<h1>Album</h1>
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Año</th>
      <th>Artista</th>
      <th>Canciones</th>
      <th>Numero de Canciones</th>
      <td></td>
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{ $album->name }}</td>
        <td>{{ $album->year }}</td>
        <td>{{ $album->artist_id }}</td>
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
        <td>
          <form action="{{ route('album.destroy', $album) }}"
            method="POST" class="m-0 p-0">
            @csrf
            @method('DELETE')
            <input type="submit" value="Borrar"
            class="bg-red-200 hover:bg-red-500 p-3" />
          </form>
        </td>
      </tr>
  </tbody>
</table>
@endsection