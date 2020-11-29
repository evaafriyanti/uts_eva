@extends('template.admin')

@section('content')
	
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                	<h5 class="card-header"> Detail Artikel</h5>
                	<h1><center>{{$artikel->judul}}</center></h1>
                	<h5><center>Penulis : {{$artikel->pengguna->nama}} | {{$artikel->tab}}</center></h5>
                	<center><td style="text-align: center;"><img src="{{url('public/adm', $artikel->foto)}}" width="400px" height="200px" style="margin-left: 50px;"> </td>
                    </center>
                    <center>{{$artikel->konten}}</center>
            </div>
       	</div>
    </div>
@endsection