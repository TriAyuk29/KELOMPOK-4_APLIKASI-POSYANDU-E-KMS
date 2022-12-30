@extends('admin.layout')
@section('admin')
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
                <form method="post" action="{{ route('jadwal.update', $editData->id) }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Nama Posyandu<span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="text" name="nama_posyandu" value="{{ $editData->nama_posyandu }}"
                            class="form-control" required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end basic select -->

                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Jadwal<span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="text" name="jadwal" value="{{ $editData->jadwal }}" class="form-control"
                            required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Lokasi<span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="text" name="lokasi" value="{{ $editData->lokasi }}" class="form-control"
                            required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Jenis Kegiatan<span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="text" name="jenis_kegiatan" value="{{ $editData->jenis_kegiatan }}"
                            class="form-control" required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Kader Pendamping<span class="text-danger">*</span></h5>
                        <div class="controls">
                          <input type="text" name="kader_pendamping" value="{{ $editData->kader_pendamping }}"
                            class="form-control" required data-validation-required-message="This field is required">
                        </div>
                      </div>
                    </div>
                    <!-- end colomd6 -->

                  </div>
                  <!--END row select-->


                  <!-- end row -->
                  <div class="text-xs-right">
                    <button type="submit" class="btn btn-rounded btn-info">Submit</button>
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
