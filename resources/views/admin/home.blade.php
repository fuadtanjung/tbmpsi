@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                
                <div class="card-header text-center text-uppercase font-weight-bold font-italic" style="color: red">Selamat Datang Admin</div>
                <div class="row">
  <div class="col-sm-5 text-center"> <br><br>
      <label class="text-center text-uppercase font-weight-bold font-italic">Lihat Pengaduan</label><br>
       <form action="/tab">
             <input type="submit" value="LAPORAN" class="btn btn-primary btn-lg"/>
        </form>
  </div>
  <div class="col-sm-5 text-right" ><br><br>
    <label class="text-center text-uppercase font-weight-bold font-italic">Lihat Pengguna</label><br>
       <form action="/tab2">
             <input type="submit" value="USERS" class="btn btn-primary btn-lg"/>
        </form>
<br><br>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection