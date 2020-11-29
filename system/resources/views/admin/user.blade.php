@extends('template.admin')

@section('content')

	  	<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="x_panel">
        @if (\Session::has('danger'))
        <div class="alert alert-danger">
        <b> {!! \Session::get('danger') !!}</b>
        </div>
        @endif

        @if (\Session::has ('success'))
        <div class="alert alert-success">
        <b> {!! \Session::get('success') !!}</b>
        </div>
        @endif
    </div>
                	<h5 class="card-header"> Data User</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                <thead class="bg-light">
                                    <tr class="border-0">
	                                    <th class="border-0">No</th>
	                                    <th class="border-0">Nama</th>
	                                    <th class="border-0">Username</th>
	                                   	<th class="border-0">Password</th>
	                                    <th class="border-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_pengguna as $key => $pengguna)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$pengguna->nama}}</td>
                                        <td>{{$pengguna->username}} </td>
                                        <td>{{$pengguna->password}}</td>
                                        <td>                                            
                                            <a class="btn btn-danger" href="{{url("pengguna/delete/$pengguna->id_user")}}"><i class="fa fa-trash-alt"> Hapus</i></a>

                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
       	</div>

@endsection