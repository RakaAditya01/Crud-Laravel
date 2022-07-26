@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Tambah Agenda</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card"> 
                <div class="card-body" style="width: 90%">
                    <form method="POST" action="{{ route('insertdataagenda') }}" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
              <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('namaguru')
                  <div class="text-danger">
                    {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                <select class="form-select" aria-label="Default select example" name="matapelajaran">
                  <option selected>Mata Pelajaran</option>
                  <option value="MTK">MTK</option>
                  <option value="B.Indonesia">B.Indonesia</option>
                  <option value="B.Inggris">B.Inggris</option>
                  <option value="PAI">PAI</option>
                  <option value="Penjaskes">Pejaskes</option>
                </select>
              </div>
            @error('matapelajaran')
                  <div class="text-danger">
                    {{$message}}
                  </div>
            @enderror
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Materi Pelajaran</label>
                <input type="text" name="materipelajaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('materipelajaran')
                    <div class="text-danger">
                      {{$message}}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jam Pelajaran</label>
                <select class="form-select" aria-label="Default select example" name="jampelajaran">
                  <option selected>Jam Pelajaran</option>
                  <option value="06:30-09:00">06:30-09:00</option>
                  <option value="09:30-12:00">09:30-12:00</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Absensi</label>
                <select class="form-select" aria-label="Default select example" name="absensi">
                  <option selected>Absensi</option>
                  <option value="Hadir">Hadir</option>
                  <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                <input type="text" name="namakelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('namakelas')
                    <div class="text-danger">
                      {{$message}}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis Pembelajaran</label>
                <select class="form-select" aria-label="Default select example" name="jenispembelajaran">
                  <option selected>Jenis Pembelajaran</option>
                  <option value="Online">Online</option>
                  <option value="Offline">Offline</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
                <input type="text" name="linkpembelajaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('linkpembelajaran')
                    <div class="text-danger">
                      {{$message}}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
                <input type="file" name="dokumentasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('dokumentasi')
                    <div class="text-danger">
                      {{$message}}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
                @error('keterangan')
                    <div class="text-danger">
                      {{$message}}
                    </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection