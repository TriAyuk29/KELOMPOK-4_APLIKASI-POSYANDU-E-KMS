<aside class="side-nav">
  <div class="brand">
    <h2>E-KMS Posyandu</h2>
  </div>

  <nav>
    <a href="{{ route('dashboard') }}"><i class="ti-more"></i>Dashboard</a>

    <a href="{{ route('datapeserta.view') }}"><i class="ti-more"></i>Profile Kader</a>

    <a href=" {{ route('jadwal.view') }}"><i class="ti-more"></i>Jadwal</a>

    <a href=" {{ route('datapeserta.view') }}"><i class="ti-more"></i>Pendataan Peserta</a>

    <a href=" {{ route('datapeserta1.view') }}"><i class="ti-more"></i>Data Peserta</a>

    <a href=" {{ route('inventaris.view') }}"><i class="ti-more"></i>Inventaris</a>



    <a href="{{ url('user/logout') }}">Logout</a>
  </nav>
</aside>
