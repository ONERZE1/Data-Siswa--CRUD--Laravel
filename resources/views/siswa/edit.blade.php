@extends('layout.main')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col md-12">

                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit data Siswa</h3>
								</div>
								<div class="panel-body">
                                        <form action="/siswa/{{$siswa->id}}/ubah" method="POST">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nama_depan">Nama depan</label>
                                                <input name="nama_depan" type="text" class="form-control" id="nama_depan" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
                                            </div>
                                            <div class="form-group">
                                                    <label for="nama_belakang">Nama belakang</label>
                                                    <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
                                            </div>
                                            <div class="form-group">
                                            <label for="jenis kelamain">Pilih jenis kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" id="">
                                                <option value="L" @if($siswa->jenis_kelamin == 'L' ) selected @endif>Laki-Laki</option>
                                                <option value="P" @if($siswa->jenis_kelamin == 'P' ) selected @endif>Perempuan</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <input name="agama" type="text" class="form-control" id="agama" placeholder="agama" value="{{$siswa->agama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea name="alamat" class="form-control" rows="5" id="alamat" >{{$siswa->alamat}}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning">Simpan</button>
                                        </form>
								</div>
							</div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection






