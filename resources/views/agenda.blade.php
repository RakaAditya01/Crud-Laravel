@extends('layout.main')

@section('content')
    <div class="container">
       <div class="card">
         <div class="card-body">
          <a type="button" href="{{route('tambahagenda')}}" class="btn btn-primary">Tambah +</a>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Guru</th>
                  <th scope="col">Mata Pelajaran</th>
                  <th scope="col">Materi Pelajaran</th>
                  <th scope="col">Jam Pelajaran</th>
                  <th scope="col">Absensi</th>
                  <th scope="col">Nama Kelas</th>
                  <th scope="col">Jenis Pembelajaran</th>
                  <th scope="col">link Pembelajaran</th>
                  <th scope="col">Dokumentasi</th>
                  <th scope="col">Keterangan</th>
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
                  <td>{{ $row->namaguru }}</td>
                  <td>{{ $row->matapelajaran }}</td>
                  <td>{{ $row->materipelajaran }}</td>
                  <td>{{ $row->jampelajaran }}</td>
                  <td>{{ $row->absensi }}</td>
                  <td>{{ $row->namakelas }}</td>
                  <td>{{ $row->jenispembelajaran }}</td>
                  <td>{{ $row->linkpembelajaran }}</td>
                  <td><div class="d-block px-2 py-1">
                      <img src="{{asset('fotodokumentasi/'.$row->dokumentasi)}}" alt="" style="width: 100px;">
                  </div></td>
                  <td>{{ $row->keterangan }}</td>
                  <td class="d-flex mr-2">
                    <form class="mr-2" action="/deletedataagenda/{{$row->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                      <a type="button" href="/tampilanagenda/{{$row->id}}" class="btn btn-warning">Edit</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $data->links() }}
         </div>
       </div>
    </div>
@endsection