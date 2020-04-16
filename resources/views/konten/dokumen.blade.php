@extends('layouts.master') 

@section('isi')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cetak Dokumen
        <small>silahkan cetak dokumen anda disini</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dokumen</a></li>
        <li class="active">Cetak</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Nama    : Ketut Sri Sekarini</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          NIM : 1815051054
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Program Studi : Pendidikan Teknik Informatika
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
<!-- Default box -->
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Judul : Aplikasi Media Cetak</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($Dokumen)) ? route ('Dokumen.update',$Dokumen->id):route('Dokumen.store')}}" method="post">
    @csrf
    @if(isset($Dokumen))?@method('PUT')
    
    @endif
    <div class="panel-body">
	<div class="form-group">
		<label class="control-label col-lg-2">Nama Dokumen</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Dokumen))?$Dokumen->nama:old('nama')}}" name="nama" class="form-control">
            @error('nama')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-lg-2">Jenis</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Dokumen))?$Dokumen->jenis:old('jenis')}}" name="jenis" class="form-control">
            @error('jenis')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	<div class="form-group">
	<button type="submit">SIMPAN</button>
    </div>
    </form>
    </div>
    </div>
</div>
        </div>

        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content --> 
@endsection