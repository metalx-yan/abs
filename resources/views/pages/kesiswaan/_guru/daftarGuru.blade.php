@extends('pages.kesiswaan.layouts.main')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
          <h3>Daftar Guru <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>

        {{-- x_content --}}
        <div class="x_content">
          <p>Daftar seluruh Guru di SMK Negeri 4 Kota Tangerang yang sudah terdapat dalam Sistem.</a></p>
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <span class="section">Data Guru</span>
            </div>
          </div>

          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Nama</th>
                <th>NIP</th>
                <th>Kategori</th>
                <th>Mata Pelajaran</th>
                <th>Kelas</th>
                <th>Daftar Kelas</th>
                <th>No. Handphone</th>
                <th>E-mail</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
               
                <td>t.nixon@datatables.net</td>
              </tr>
              <tr>
                <td>Garrett</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>g.winters@datatables.net</td>
              </tr>
              <tr>
                <td>Ashton</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
               
                <td>a.cox@datatables.net</td>
              </tr>
              <tr>
                <td>Cedric</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>c.kelly@datatables.net</td>
              </tr>
              <tr>
                <td>Airi</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
               
                <td>a.satou@datatables.net</td>
              </tr>
              <tr>
                <td>Brielle</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
               
                <td>b.williamson@datatables.net</td>
              </tr>
              <tr>
                <td>Herrod</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>h.chandler@datatables.net</td>
              </tr>
              <tr>
                <td>Rhona</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>r.davidson@datatables.net</td>
              </tr>
              <tr>
                <td>Colleen</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
               
                <td>c.hurst@datatables.net</td>
              </tr>
              <tr>
                <td>Sonya</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>s.frost@datatables.net</td>
              </tr>
              <tr>
                <td>Jena</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>j.gaines@datatables.net</td>
              </tr>
              <tr>
                <td>Quinn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>q.flynn@datatables.net</td>
              </tr>
              <tr>
                <td>Charde</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>c.marshall@datatables.net</td>
              </tr>
              <tr>
                <td>Haley</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>h.kennedy@datatables.net</td>
              </tr>
              <tr>
                <td>Tatyana</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
               
                <td>t.fitzpatrick@datatables.net</td>
              </tr>
              <tr>
                <td>Michael</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                
                <td>m.silva@datatables.net</td>
              </tr>
              <tr>
                <td>Paul</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
              
                <td>p.byrd@datatables.net</td>
              </tr>
              <tr>
                <td>Gloria</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
              
                <td>g.little@datatables.net</td>
              </tr>
              <tr>
                <td>Bradley</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
               
                <td>b.greer@datatables.net</td>
              </tr>
              <tr>
                <td>Dai</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
              
                <td>d.rios@datatables.net</td>
              </tr>
              <tr>
                <td>Jenette</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
               
                <td>j.caldwell@datatables.net</td>
              </tr>
              <tr>
                <td>Yuri</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
              
                <td>y.berry@datatables.net</td>
              </tr>
              <tr>
                <td>Caesar</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
               
                <td>c.vance@datatables.net</td>
              </tr>
              
            </tbody>
          </table>

	
        </div>
        {{-- ! x_content --}}

      </div>
    </div>
  </div>
</div>
</div>
        <!-- /page content -->
@endsection