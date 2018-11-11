@extends('layouts.app2')

@section('content')
<section id="home" class="home">
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-6">
                                <div class="home_text">
                                    <h1 class="text-white">Selamat Datang</h1>
                                </div>

                                <div class="col-md-5">
                                   <form method="post" action="{{route('insert')}}" enctype="multipart/form-data">
                                     {{ csrf_field() }}
                                    <div class="form-group">
                                    <label class="text-black" >Nama:</label>
                                    <input type="text" value=" {{Auth::user()->name}}   " name="var_nama">
                                    </div>

                                      <div class="form-group">
                                      <label class="text-black">No.Identitas:</label>
                                      <input  name="int_no_idt">
                                      </div>

                                          <div class="form-group">
                                          <label class="text-black">Pengaduan:</label>
                                          <textarea name="var_peng" rows="5" cols="50"></textarea>
                                          </div>

                                  <div class="form-group">
                                    <label class="text-black">Masukkan File:</label>
                                    <input type="file" class="form-control-file"  name="file">
                                  </div>

                                      <button type="submit" value="submit" name="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="phone_one phone_attr1 text-center sm-m-top-10">
                                    <img src="assets/images/Fix-1.png" alt="" width="400" />
                                </div>
                            </div>

                        </div>
                        <div class="scrooldown">
                            <a href="#download"><i class="fa fa-chevron-down"></i></a>
                        </div>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

  

            <!--App Download Section-->
            <section id="download" class="download m-top-100">
                <div class="download_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_download ">
                            <div class="col-md-11">
                                <div class="download_item roomy-100">
                                    <h2 class="text-white">Daftar Pelaporan</h2>
                                    
                                      <table class="table border border-primary" id='tabli'  border="5">
                                          <thead>

                                            <tr>
                                              <th scope="col" class="text-black">No.</th>
                                              <th scope="col" class="text-black">Pengaduan</th>
                                              <th scope="col" class="text-black">File</th>
                                             
                                            </tr>

                                          </thead>

                                      
                                          <tbody>
                                              @foreach($laporan as $data)
                                                  <tr>
                                                  <th class="text-black">{{$no++}}</th>
                                                  <th class="text-black">{{$data->peng}}</th>
                                                     <th><img src="./upload/{{$data->file}}" width="150" height="150"></th>
                                                </tr>
                                                @endforeach
                                          </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection

@section('script')
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tabli').DataTable();
    } );
    </script>

@endsection

