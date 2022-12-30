@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-6">
            <h3 class="box-title">Data Peserta</h3>
          </div>
          <!-- /.col -->
          <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('datapeserta1.add') }}" type="button" class="btn btn-success mb-5">Data
              Peserta</a>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="example1" class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Pasien</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">NoHp</th>
                    <th class="text-center">Usia</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $datapeserta1)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td class="text-center">{{ $datapeserta1->nama_pasien }}</td>
                      <td class="text-center">{{ $datapeserta1->alamat }}</td>
                      <td class="text-center">{{ $datapeserta1->nohp }}</td>
                      <td class="text-center">{{ $datapeserta1->usia }}</td>
                      <td class="text-center">
                        <a href="{{ route('datapeserta1.edit', $datapeserta1->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('datapeserta1.delete', $datapeserta1->id) }}" id="delete"
                          class="btn btn-danger">Delete</a>
                      </td>

                    </tr>
                  @endforeach
                  <tr>
              </table>
              <!-- /.col -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->

    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

<!-- Vendor JS -->
<script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>
