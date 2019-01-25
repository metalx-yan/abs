<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Monitoring</span></a>
      </div>
    </div>
    <!-- /menu profile quick info -->
    <br />
 
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Dashboard</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-bar-chart"></i> Persentase Tidak Hadir <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Kehadiran Permata Pelajaran</a></li>
              <li><a href="#">Kehadiran Perkelas</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-building-o"></i> Data Kelas <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @foreach (App\Model\Kelas\Tingkatan::all() as $tingkatan)
                <li><a href="#">{{ $tingkatan->tingkatan }}<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    @foreach ($tingkatan->jurusans as $jurusan)
                      <li><a href="{{ route('kelas.create', $jurusan->id) }}">{{ $jurusan->jurusan }}</a></li>
                    @endforeach
                  </ul>
                </li>
              @endforeach
            </ul>
          </li>
          
          <li><a><i class="fa fa-users"></i> Data Siswa <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @foreach (App\Model\Kelas\Tingkatan::all() as $tingkatan)
                <li><a href="#">{{ $tingkatan->tingkatan }}<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    @foreach ($tingkatan->jurusans as $jurusan)
                      <li><a href="{{ route('siswa.create', $jurusan->id) }}">{{ $jurusan->jurusan }}</a></li>
                    @endforeach
                  </ul>
                </li>
              @endforeach
            </ul>
          </li>


          <li><a href="#"><i class="fa fa-list-alt"></i> Data Pelajaran<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @foreach (App\Model\Pelajaran\TipePelajaran::all() as $tipe)
                <li><a href="{{ route('pelajaran.create', $tipe->id) }}">{{ $tipe->tipe_pelajaran }}</a>
                
                </li>
              @endforeach
            </ul>
          </li>

          <li><a href="{{ route('guru.create') }}"><i class="fa fa-users"></i> Data Guru<span class="fa fa-chevron-down"></a></li>
          
          
          <li><a><i class="fa fa-edit"></i> Absensi Siswa <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('listAbsen') }}">Daftar Hadir</a></li>
              <li><a href="{{ route('listAlfa') }}">Daftar Tidak Hadir</a></li>
            </ul>
          </li>
          
        </ul>
        <h3>_______________________________</h3>
        <ul class="nav side-menu">
          <li><a href="{{ route('kesiswaan.create') }}"><i class="fa fa-plus"></i> Tambah Kesiswaan </span></a></li>
      </div>

    </div>
    <!-- /sidebar menu -->
  </div>
</div>