<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Monitoring</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/user.png" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Selamat datang !</span>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />
 
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-home"></i> Persentase Kehadiran <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Kehadiran Permata Pelajaran</a></li>
              <li><a href="#">Kehadiran Perkelas</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-user"></i> Data Kelas <span class="fa fa-chevron-down"></span></a>
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
          
          <li><a><i class="fa fa-user"></i> Data Siswa <span class="fa fa-chevron-down"></span></a>
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


          <li><a href="#"><i class="fa fa-user"></i> Data Pelajaran<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              @foreach (App\Model\Pelajaran\TipePelajaran::all() as $tipe)
                <li><a href="{{ route('pelajaran.create') }}">{{ $tipe->tipe_pelajaran }}</a>
                
                </li>
              @endforeach
            </ul>
          </li>

          <li><a href="{{ route('tambahGuru') }}"><i class="fa fa-user"></i> Data Guru</a>
          </li>
          
          
          <li><a><i class="fa fa-edit"></i> Absensi Siswa <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('listAbsen') }}">Daftar Hadir</a></li>
              <li><a href="{{ route('listAlfa') }}">Daftar Tidak Hadir</a></li>
            </ul>
          </li>
          
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
        </form>
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>