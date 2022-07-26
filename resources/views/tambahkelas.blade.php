@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Tambah Kelas</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card"> 
                    <div class="card-body" style="width: 90%">
                 <form method="POST" action="{{ route('insertdatakelas') }}">
                  @csrf
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
                  <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                  <input name="walikelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                @error('walikelas')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection