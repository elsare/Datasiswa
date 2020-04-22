@extends('layout.master')

@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Inputs</h3>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
			<div class="modal-body">
				      <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
				      	{{csrf_field()}}
							 <div class="form-group">
							    <label for="exampleInputEmail1">Nama Depan</label>
							    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">							
							  </div>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Belakang</label>
							    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">							
							  </div>

							<div class="form-group">
							    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
							    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
							      <option value="L" @if($siswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
							      <option value="P" @if($siswa->jenis_kelamin == "P") selected @endif>Perempuan</option>					
							    </select>
							</div>

							<div class="form-group">
							    <label for="exampleInputEmail1">Agama</label>
							    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">							
							</div>

							<div class="form-group">
							    <label for="exampleFormControlTextarea1">Alamat</label>
							    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$siswa->alamat}}</textarea>
							</div>
							<div class="form-group">
							    <label for="exampleFormControlTextarea1">Avatar</label>
							    <input type="file" name="avatar" class="form-control">
							</div>
							    <button type="submit" class="btn btn-warning">Update</button>
						
						     </div>
			</div>
			</div>
				</div>
			</div>

				</div>
			</div>
		</div>
	</div>
</div>



@stop

@section('content1')
	<h1>Edit Data Siswa</h1>
		@if(session('sukses'))
			<div class="alert alert-warning" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			<div class="modal-body">
				      <form action="/siswa/{{$siswa->id}}/update" method="POST">
				      	{{csrf_field()}}
							 <div class="form-group">
							    <label for="exampleInputEmail1">Nama Depan</label>
							    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">							
							  </div>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Belakang</label>
							    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">							
							  </div>

							<div class="form-group">
							    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
							    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
							      <option value="L" @if($siswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
							      <option value="P" @if($siswa->jenis_kelamin == "P") selected @endif>Perempuan</option>					
							    </select>
							</div>

							<div class="form-group">
							    <label for="exampleInputEmail1">Agama</label>
							    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">							
							</div>

							<div class="form-group">
							    <label for="exampleFormControlTextarea1">Alamat</label>
							    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$siswa->alamat}}</textarea>
							</div>
							    <button type="submit" class="btn btn-warning">Update</button>
						
						     </div>
			</div>
			</div>
		</div>
		<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      
						      <div class="modal-footer">
						       
							</form> 
				      </div>
				    </div>
				  </div>
				@endsection