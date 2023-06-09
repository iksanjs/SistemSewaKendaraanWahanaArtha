<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  @include('layout.admin_sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layout.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penambahan Data Service</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            @if ($errors->any())
        <div class="allert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    <form method="post" action="{{ route('service.store') }}" class="container-fluid">
        @csrf
        <h4 class="h4 mb-10 text-gray-800">1. Data Kendaraan</h4>
        <div class="form-group row">
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">Jenis Kendaraan</label>
            <input type="text" class="form-control" name="">
          </div>
          <div class="col-sm-6">
            <label for="">No Polisi</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">Merk</label>
            <input type="text" class="form-control" name="">
          </div>
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">Tipe</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <h4 class="h4 mb-10 text-gray-800">2. Data Bengkel</h4>
        <div class="form-group row">
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">ID Bengkel</label>
            <input type="text" class="form-control" name="">
          </div>
          <div class="col-sm-6">
            <label for="">Nama Bengkel</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">Lokasi Bengkel</label>
            <input type="text" class="form-control" name="">
          </div>
          <div class="col-sm-6">
            <label for="">Jenis Bengkel</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <h4 class="h4 mb-10 text-gray-800">3. Data Cabang</h4>
        <div class="form-group row">
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">Kode Cabang</label>
            <input type="text" class="form-control" name="">
          </div>
          <div class="col-sm-6">
            <label for="">Nama Cabang</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <h4 class="h4 mb-10 text-gray-800">4. Data Service</h4>
        <div class="form-group row">
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">KM Kendaraan</label>
            <input type="text" class="form-control" name="">
          </div>
          <div class="col-sm-6">
            <label for="">KM Service Selanjutnya</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">Tanggal Service</label>
            <input type="text" class="form-control" name="">
          </div>
          <div class="col-sm-6">
            <label for="">Tanggal Service Pengembalian</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <h4 class="h4 mb-10 text-gray-800">.</h4>
        <div class="form-group row">
          <div class="col-sm-6  mb-3 mb-sm-0">
            <label for="">.</label>
            <input type="text" class="form-control" name="">
          </div>
          <div class="col-sm-6">
            <label for="">.</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <label for="">.</label>
            <input type="text" class="form-control" name="">
          </div>
        </div>
        <div class="form-group row col-sm-6  mb-3 mb-sm-0">
            <input type="submit" class=" btn btn-sm btn-primary shadow-sm" value="Submit">
        </div>
      </form>
            
          </div>
            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  @include('layout.footer')

</body>

</html>