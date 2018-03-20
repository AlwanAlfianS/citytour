@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Siswa
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Siswa</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  @if(session('success'))
    <div class="alert alert-success">
      <p>{{ session('success') }}</p>
    </div>
  @endif

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">
        <a href="{{ url('siswa/add') }}"><button type="button" name="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Siswa</button></a>
      </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Agama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @foreach($siswa as $row)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $row->nis }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jk }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->notelp }}</td>
            <td>{{ $row->agama }}</td>
            <td>{{ $row->id_kelas }}</td>
            <td>
              <a href="{{ url('siswa/' . $row->id_siswa . '/edit') }}"><button type="button" name="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
              <a href="{{ url('siswa/' . $row->id_siswa . '/delete') }}"<button type="button" name="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
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
