@extends('master.app-dashboard')

@section('content')

<div class="card mt-4">
    <div class="card-body">
        <a href="javascript:void(0)" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Kategori</a>
        <table class="table table-bordered">
           <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Kategori</th>
                    <th>Paren</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                   
                   
                </tr>
           </thead>
           <tbody>
                 @foreach ($data as $item)
        <tr class="text-center">

            <td>{{ $loop->iteration }}</td>
               <td><img
            src="{{$item['gambar']}}"
            class="card-img-top ms-auto"
            alt="..."
            style="width: 80px; height: 30%;"
            /></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->paren->name ?? "-" }}</td>
            <td>{{ $item->keterangan }}</td>
            <td></td>

       
            
        </tr>
        @endforeach
        </tbody>
        </table>
           
    </div>
</div>
    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{  route('management-kategori.store') }}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="mb-3">
                <label for="kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="name" class="form-control" id="kategori" placeholder="Masukan Kategori">
                </div>
        <div class="mb-3">
  <label for="kategori" class="form-label">Paren </label>
  <select name="parent_id" id="" class="form-control">
  <option value="">Pilih Parent</option>
  @foreach($paren as $item)
  <option value="{{ $item->id }}">{{ $item->name}}</option>

  @endforeach
</select>
</div>
        <div class="mb-3">
  <label for="kategori" class="form-label">Gambar </label>
  <input type="file" class="form-control" name="gambar" id="kategori" required placeholder="Masukan Kategori">
  
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
  <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Simpan</button>
 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
          </form>
      </div>
      
    </div>
  </div>
</div>
@endsection

