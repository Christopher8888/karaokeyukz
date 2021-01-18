
@extends('master')

@section('content')


  <div class="container">
<h1>Edit song playlist</h1>

    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
            {{session('sukses')}}
    </div>
    @endif
        <div class="row">
        <form action ="/lagu/{{$lagu->id}}/update" method ="POST">
                                {{csrf_field()}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Judul Lagu</label>
                                        <input name="judul_lagu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                         placeholder="Add your favorite song to your playlist" value ="{{$lagu->judul_lagu}}">
                                        <div class="form-text">wajib diisi min 5 dan max 20 character</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Penyanyi</label>
                                        <input name="penyanyi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                         placeholder="...." value ="{{$lagu->penyanyi}}" >
                                        <div  class="form-text">wajib diisi min 3 dan max 15 character</div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tahun lagu</label>
                                        <input name="tahun_lagu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                         placeholder="...." value ="{{$lagu->tahun_lagu}}">
                                        <div class="form-text"> tahun 2000 - 2020</div>
                                    </div>

                                    <div class="mb-3">
                                    <div class="form-floating">
                                    <div class="form-floating">
                                                    <textarea name="lirik_lagu" class="form-control" placeholder="....." id="floatingTextarea2" style="height: 100px">{{$lagu->lirik_lagu}}</textarea>
                                                    <label for="floatingTextarea2">Lirik lagu</label>
                                                    </div>
                                    </div>
                            </div>
                                    <div class="modal-footer">
                          
                                        <button type="submit" class="btn btn-warning ">update</button>
                                    </div>
                  </form>
         
        </div>
@endsection




         
   
  