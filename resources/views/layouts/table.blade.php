<!DOCTYPE html>
<html lang="en">
<head>
    <link href="New folder/css/bootstrap.min.css" rel="stylesheet" /> 
</head>

<div class="container">
  </div>

<div class="container">
    <h2>Daftar Laporan</h2> 
    <br>
    <form action="/">
        <input type="submit" value="Back" class="btn btn-primary"/>
    </form>
    <br><br>       
    <table class="table border border-primary" id='tablu' border="3" >
        <thead class="thead-dark">
            <tr>
                <th scope="col">no</th>
                <th scope="col">id</th>
                <th scope="col">NIM/NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Laporan</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporan as $data)
             <tr>
             <td class="text-black">{{$no++}}</td>
             <td class="text-black">{{$data->id}}</td>
             <td class="text-black">{{$data->no_idt}}</td>
             <td class="text-black">{{$data->nama}}</td>
             <td class="text-black">{{$data->peng}}</td>
             <td><img src="/upload/{{$data->file}}" class="center" width ="200" height="150"></td>
             <td> 
                 <form method="POST" action="/{{$data->id}}/delete">
                 {{csrf_field()}}

                 <input type="submit" name="delete" value="Hapus" class="btn btn-danger"/>

                 <input type="hidden" name="_method" value="DELETE">
                 
                 
                 </form>
                </td>
             </tr> 
             @endforeach            
            </tbody>

     
</div>
</div>

   


