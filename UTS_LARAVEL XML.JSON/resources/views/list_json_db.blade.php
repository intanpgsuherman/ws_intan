@extends('AdminLayout/index')
@section('content')
    
 <!-- Card header -->
 <div class="card-header border-0">
    <h3 class="mb-0">List JSON to DB Data Dosen</h3>
  </div>
  <!-- Light table -->
  <div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="sort" data-sort="name">ID</th>
          <th scope="col" class="sort" data-sort="budget">NIP</th>
          <th scope="col" class="sort" data-sort="status">Name</th>
          <th scope="col" class="sort" data-sort="status">Matakuliah</th>
          <th scope="col" class="sort" data-sort="status">Jumlah SKS</th>
          <th scope="col" class="sort" data-sort="completion">Address</th>
          <th colspan="2"><center>Action</center></th>
          <th scope="col"></th>
        </tr>
      </thead>
    </div>

<tbody>
    @foreach ($dosen as $item)
        
         <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->NIP}}</td>
            <td>{{$item->Name}}</td>
            <td>{{$item->matakuliah->nama_mk}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>{{$item->Address}}</td>
            <td><a href="/list/detail/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="/list/delete/{{$item->id}}" method="POST">
                            @method('delete')
                             @csrf
                             <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
         </tr>

     @endforeach
    </tbody>
    </table>
    
    <div class="col">
        <a href="/createdosen" class="btn btn-success btn-sm">
              CREATE
        </a>
     </div>
    

      <div class="col">
    {{$dosen->links('AdminLayout.pagination')}}
    </div>

@endsection