@extends('AdminLayout/index')
@section('content')


              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Dosen</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/list/update/{{$dosen->id}}">
                @method('patch')
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your NIP</label>
                    <input type="text" class="form-control" id="NPM" name="NIP" value="{{$dosen->NIP}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" value="{{$dosen->Name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Address</label>
                    <input type="text" class="form-control" id="Address" name="Address" value="{{$dosen->Address}}">
                  </div>
                  <div class="form-group">
                        <label>Select Your Mata Kuliah</label>
                        <select class="custom-select" id="matakuliah_id" name="matakuliah_id">
                          <option value="0" {{$dosen->matakuliah_id == "0" ? 'selected' : ''}}>Tidak Ada Matkul</option>
                          <option value="1" {{$dosen->matakuliah_id == "1" ? 'selected' : ''}}>WEB SERVICE</option>
                          <option value="2" {{$dosen->matakuliah_id == "2" ? 'selected' : ''}}>REKAYASA SISTEM INFORMASI</option>
                          <option value="3" {{$dosen->matakuliah_id == "3" ? 'selected' : ''}}>INTELIJEN BISNIS</option>
                          <option value="4" {{$dosen->matakuliah_id == "4" ? 'selected' : ''}}>DATA MINING</option>
                          <option value="5" {{$dosen->matakuliah_id == "5" ? 'selected' : ''}}>BIG DATA</option>
                          <option value="6" {{$dosen->matakuliah_id == "6" ? 'selected' : ''}}>TATA KELOLA DAN AUDIT</option>
                          <option value="7" {{$dosen->matakuliah_id == "7" ? 'selected' : ''}}>PRAKTIKUM PWEB</option>
                          <option value="8" {{$dosen->matakuliah_id == "8" ? 'selected' : ''}}>PRAKTIKUM JARKOM</option>
                          <option value="8" {{$dosen->matakuliah_id == "9" ? 'selected' : ''}}>SOSIOTEKNOLOGI</option>
                          <option value="8" {{$dosen->matakuliah_id == "10" ? 'selected' : ''}}>KPPO</option>
                        </select>
                      </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>

                <div class="col">
                 <button> <a href="/list" class="btn btn-success btn-sm">
                        BACK
                 </button>
                  </a>
               </div>

              </form>
            </div>
            <!-- /.card -->
@endsection