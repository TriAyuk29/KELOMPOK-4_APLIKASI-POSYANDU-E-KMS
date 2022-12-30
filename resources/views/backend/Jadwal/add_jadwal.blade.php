@extends('admin.layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">

        <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Data Jadwal</h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                <form method="post" action="{{ route('jadwal.store') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label for="nama">Nama Posyandu<span class="text-danger">*</span></label>
                        <input id="nama" type="text" name="nama_posyandu" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Jadwal<span class="text-danger">*</span></label>
                        <input type="text" name="jadwal" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->

                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Lokasi<span class="text-danger">*</span></label>
                        <input type="text" name="lokasi" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Jenis Kegiatan<span class="text-danger">*</span></label>
                        <input type="text" name="jenis_kegiatan" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group">
                        <label>Kader Pendamping<span class="text-danger">*</span></label>
                        <input type="text" name="kader_pendamping" class="form-control" required>
                      </div>
                    </div>
                    <!-- end colomd6 -->

                    <!--END row select-->

                  </div>
                  <!-- end row -->


                  <!-- end row -->
                  <div class="text-xs-right">
                    <button type="submit" class="btn btn-rounded btn-primary">Submit</button>
                  </div>
                </form>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

<script src="{{ asset('backend/js/pages/form-validation.js') }}"></script>
