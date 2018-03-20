@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ empty($edit) ? 'Tambah' : 'Edit' }} Data Kelas
    <small>SMK Negeri 4 Bandung</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Kelas</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  @if(session('error'))
    <div class="alert alert-danger">
      <p>{{ session('error') }}</p>
    </div>
  @endif

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">
        <a href="{{ url('kelas') }}"><button type="button" name="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</button></a>
      </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">

      <form method="post" action="{{ empty($edit) ? url('kelas/add') : url('kelas/' . @$result->id_kelas . '/edit') }}" class="forms">

        {{ csrf_field() }}

        @if(!empty($result))
          {{ method_field('PATCH') }}
        @endif

        <div class="form-group">
          <label for="InputKelas">Kelas</label>
          <input type="text" class="form-control" id="inputKelas" name="nama_kelas" placeholder="Nama Kelas" value="{{ @$result->nama_kelas }}">
        </div>
        <div class="form-group">
          <label for="InputJurusan">Jurusan</label>
          <input type="text" class="form-control" id="inputJurusan" name="jurusan" placeholder="Nama Jurusan" value="{{ @$result->jurusan }}">
        </div>
        <!--<div class="form-group">
          <label for="inputJurusan">Jurusan</label>
          <select class="form-control">
            <option disabled>Nama Jurusan</option>
            <option>Audio Video</option>
            <option>Multimedia</option>
            <option>Rekayasa Perangkat Lunak</option>
            <option>Teknik Komputer Jaringan</option>
            <option>Teknik Instalasi Tenaga Listrik</option>
            <option>Teknik Otomasi Industri</option>
          </select>
        </div>-->
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
      </form>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
@endsection
