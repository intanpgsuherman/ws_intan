@extends('AdminLayout/index')
@section('content')



            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Data Dosen</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="/store">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Your NIP</label>
                  <input type="text" class="form-control" id="NIP" name="NIP" value=" " >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Name</label>
                  <input type="text" class="form-control" id="Name" name="Name" value=" ">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Address</label>
                  <input type="text" class="form-control" id="Address" name="Address" value=" ">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah SKS</label>
                  <input type="text" class="form-control" id="sks" name="sks" value=" ">
                  {{-- <select class="custom-select" id="sks" name="sks">
                    <option value="0"> Tidak Ada </option>
                            @foreach ($matakuliah as $item)
                            <option value="{{$item ->id}}">{{$item ->sks}}</option>
                            @endforeach
                  </select> --}}
                </div>
                

                  <div class="form-group">
                        <label>Select Your Matakuliah</label>
                        <select class="custom-select" id="matakuliah_id" name="matakuliah_id">
                            <option value="0"> Tidak Ada Matakuliah </option>
                            @foreach ($matakuliah as $item)
                            <option value="{{$item ->id}}">{{$item ->nama_mk}}</option>
                            @endforeach
                        </select>
                      </div>

                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>

              </form>
            </div>
@endsection