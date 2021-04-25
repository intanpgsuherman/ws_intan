@extends('AdminLayout/index')
@section('content')

<br>
<center> <h2>  Tabel Matakuliah </h2> </center>

    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col"><center>Nama</center></th>
            <th scope="col"><center>Jumlah SKS</center></th>

              

        </tr>
        </thead>
        <tbody>
          


            @foreach ($matakuliah as $item)
          
            <tr>
            <td>{{$item->nama_mk}}</td>
            <td>{{$item->sks}}</td>
        
            @endforeach

            
        </tbody>
      </table>
      <div class="row">
        {{$matakuliah->links('AdminLayout.pagination')}}
        </div>
    @endsection
    