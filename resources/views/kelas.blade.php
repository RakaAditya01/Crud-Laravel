@extends('layout.main')

@section('content')
    <div class="container">
        <a type="button" href="{{route('tambahkelas')}}" class="btn btn-primary">Tambah +</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Nama Wali Kelas</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach ($data as $index => $row)
              <tr>
                <th scope="row">{{ $index + $data->firstItem() }}</th>
                <td>{{ $row->namakelas }}</td>
                <td>{{ $row->walikelas }}</td>
                <td class="d-flex mr-2">
                  <form class="mr-2" action="/deletedata/{{$row->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
                    <a type="button" href="/tampilankelas/{{$row->id}}" class="btn btn-warning">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
    </div>
@endsection