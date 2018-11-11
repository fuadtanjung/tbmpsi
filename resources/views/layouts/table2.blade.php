<!DOCTYPE html>
<html lang="en">
<head>
    <link href="New folder/css/bootstrap.min.css" rel="stylesheet" />
     
</head>


<div class="container">
<br>
    <h2 >Daftar User</h2>
    <br>
    <div class="col-md-8" >
        <form action="/">
             <input type="submit" value="Back" class="btn btn-primary"/>
        </form>
          <br><br>
            
        <table class="table border border-primary table2" border="1" id="table2">
            <thead>
                <tr>
                <th scope="col">no</th>
                <th scope="col">id</th>
                <th scope="col">Email</th>
                <th scope="col">Nama</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($User as $data2)
             <tr>
             <th class="text-black ">{{$no++}}</th>
             <th class="text-black">{{$data2->id}}</th>
             <th class="text-black">{{$data2->email}}</th>
             <th class="text-black">{{$data2->name}}</th>
             <th class="text-black">{{$data2->password}}</th>
             
            <th> 
                 <form method="POST" action="/{{$data2->id}}/hapus">
                 {{csrf_field()}}

                 <input type="submit" name="delete" value="Hapus" class="btn btn-danger"/>

                 <input type="hidden" name="_method" value="DELETE">
                 
                 
                 </form>
                </th>
             </tr> 
             @endforeach
            </tbody>
            </table>
    </div>

</div>

</div>
   