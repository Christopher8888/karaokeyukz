@extends('master')

@section('content')

   

    <div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
            {{session('sukses')}}
    </div>
    @endif
        <div class="row">
            <div class ="col-6">
                <h1>Playlist Lagu</h1>
            </div>

            <div class ="col-10">
                                         
                 <button type="button" class="btn btn-primary btn-sm float-right " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah lagu 
                </button>
           
                        
        </div>
            <table class ="table table-hover">
                <tr>
                    <th>Judul Lagu</th>
                    <th>Penyanyi</th>
                    <th>Lirik lagu</th>
                    <th>Tahun Lagu</th>
                    <th>ACTION</th>
                </tr>
        <!-- looping menampilkan data -->
                @foreach($data_lagu as $lagu)
                <tr>
                <!-- isi table  -->
                    <td>{{$lagu -> judul_lagu}}</td>
                    <td>{{$lagu -> penyanyi}}</td>
                    <td>{{$lagu -> lirik_lagu}}</td>
                    <td>{{$lagu -> tahun_lagu}}</td>
                    <td><a href="/lagu/{{$lagu->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                  <a href="/lagu/{{$lagu->id}}/delete" class="btn btn-danger btn-sm m">delete</a>
                  </td>
                    
                </tr>
        </div>
                    @endforeach
            </table>





            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Tambah lagu </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action ="/lagu/create" method ="POST">
                                {{csrf_field()}}
                               
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Judul Lagu</label>
                                        <input name="judul_lagu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add your favorite song to your playlist">
                                        <div id="emailHelp" class="form-text">wajib diisi min 5 dan max 20 character</div>
                                        <!-- @error('judul_lagu') <span>{{$message}}</span> @enderror -->
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Penyanyi</label>
                                        <input name="penyanyi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="....">
                                        <div id="emailHelp" class="form-text">wajib diisi min 3 dan max 15 character</div>
                                        <!-- @error('penyanyi') <span>{{$message}}</span> @enderror -->
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tahun lagu</label>
                                        <input name="tahun_lagu" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="....">
                                        <div id="emailHelp" class="form-text"> tahun 2000 - 2020</div>
                                    </div>

                                    <div class="mb-3">
                                    <label for="floatingTextarea2">Lirik lagu</label>
                                    <div class="form-floating">
                                    <div class="form-floating">
                                                    <textarea name="lirik_lagu" class="form-control" placeholder="....." id="floatingTextarea2" style="height: 100px"></textarea>
                                                   
                                                </div>
                                    </div>
                            </div>
                                    <div class="modal-footer">
         
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                   
                            </div>
                        </div>
                        </div>
                </form>
        </div>
    </div>

  
    @endsection 

