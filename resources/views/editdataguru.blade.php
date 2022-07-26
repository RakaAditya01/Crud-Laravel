@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Edit Data Guru</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card"> 
                <div class="card-body" style="width: 90%">
             <form method="POST" action="/updatedata/{{$data->id}}">
              @csrf
              @method('put')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
              <input type="text" name="namaguru" value="{{$data->namaguru}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('namaguru')
                  <div class="text-danger">
                    {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NIK Guru</label>
              <input type="number" name="nikguru" value="{{$data->nikguru}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @error('nikguru')
                  <div class="text-danger">
                    {{$message}}
                  </div>
            @enderror
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                <select class="form-select" aria-label="Default select example" name="matapelajaran">
                  <option selected>{{$data->matapelajaran}}</option>
                  <option value="MTK">MTK</option>
                  <option value="B.Indonesia">B.Indonesia</option>
                  <option value="B.Inggris">B.Inggris</option>
                  <option value="PAI">PAI</option>
                  <option value="Penjaskes">Pejaskes</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" value="{{$data->username}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              @error('username')
                    <div class="text-danger">
                      {{$message}}
                    </div>
              @enderror
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="text" name="password" value="{{$data->password}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              @error('password')
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