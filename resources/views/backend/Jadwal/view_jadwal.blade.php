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
            <h3 class="box-title">Data Jadwal</h3>
          </div>
          <!-- /.col -->
          <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('jadwal.add') }}" type="button" class="btn btn-success mb-5"> Tambah Data
              Jadwal</a>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="example1" class="table table-striped">
                <thead>
                  <tr>
                    {{-- <th class="text-center">No</th> --}}
                    <th class="text-center">Nama Posyandu</th>
                    <th class="text-center">Jadwal</th>
                    <th class="text-center">Lokasi</th>
                    <th class="text-center">Jenis Kegiatan</th>
                    <th class="text-center">Kader Pendamping</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $jadwal)
                    <tr>
                      <td class="text-center">{{ $jadwal->nama_posyandu }}</td>
                      <td class="text-center">{{ $jadwal->jadwal }}</td>
                      <td class="text-center">{{ $jadwal->lokasi }}</td>
                      <td class="text-center">{{ $jadwal->jenis_kegiatan }}</td>
                      <td class="text-center">{{ $jadwal->kader_pendamping }}</td>
                      <td class="text-center">
                        <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('jadwal.delete', $jadwal->id) }}" id="delete"
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
