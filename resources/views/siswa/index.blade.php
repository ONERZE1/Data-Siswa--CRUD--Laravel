@extends('layout.main')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col md-12">
                    <div class="panel">
						<div class="panel-heading">
                                @if(session('sukses'))
                                <div class="alert alert-success">
                                    <strong>{{session('sukses')}}</strong>
                                </div>
                            @endif
                            @if(session('ubah'))
                                <div class="alert alert-success">
                                    <strong>{{session('ubah')}}</strong>
                                </div>
                            @endif
                            @if(session('hapus'))
                            <div class="alert alert-success">
                                <strong>{{session('hapus')}}</strong>
                            </div>
                        @endif
                                <h3 class="panel-title">Data Siswa</h3>
                                <div class="right">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> <strong>Tambah data siswa</strong> </button>
                                </div>
						</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
                                        <th>Nama depan</th>
                                        <th>Nama belakang</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data_siswa as $siswa)
                                    <tr>
                                        <td>{{$siswa->nama_depan}}</td>
                                        <td>{{$siswa->nama_belakang}}</td>
                                        <td>{{$siswa->jenis_kelamin}}</td>
                                        <td>{{$siswa->agama}}</td>
                                        <td>{{$siswa->alamat}}</td>
                                        <td><a href="\siswa\{{$siswa->id}}\edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="\siswa\{{$siswa->id}}\hapus" class="btn btn-danger btn-sm">Delete</a>
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
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             <form action="/siswa/create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_depan">Nama depan</label>
                    <input name="nama_depan" type="text" class="form-control" id="nama_depan" placeholder="Nama Depan">
                </div>
                <div class="form-group">
                        <label for="nama_belakang">Nama belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" placeholder="Nama Belakang">
                </div>
                <div class="form-group">
                <label for="jenis kelamain">Pilih jenis kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input name="agama" type="text" class="form-control" id="agama" placeholder="agama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="5" id="alamat"></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
            </form>
        </div>
      </div>
    </div>
  </div>

@stop

