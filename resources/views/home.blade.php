@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
      <div class="home-tab">
        <div class="tab-content tab-content-basic">
          <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
            <div class="row">
              <p><h3><b>Kerusakan Rumah</b></h3><br>
                <h6>Data Update : 26 Oktober 2022</h6>
              </p>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-danger card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-2">Rusak Berat</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="text-white mb-4">14</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-warning card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash mb-2">Rusak Ringan</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="mb-4">78</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-success card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-2">Rusak Sedang</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="text-white mb-4">5</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-primary card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-2">Terendam</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="text-white mb-4">7</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <p><h3><b>Kerusakan Fasilitas</b></h3><br>
                <h6>Data Update : 26 Oktober 2022</h6></p>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-info card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash mb-2">Pendidikan</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="mb-4">2</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-info card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash mb-2">Kesehatan</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="mb-4">3</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-info card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash mb-2">Jembatan</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="mb-4">2</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-info card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash mb-2">Peribadatan</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="mb-4">1</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-info card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash mb-2">Perkantoran</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="mb-4">8</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <p><h3><b>Jumlah Korban</b></h3><br>
                <h6>Data Update : 26 Oktober 2022</h6></p>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-danger card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-2">Meninggal</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="text-white mb-4">23</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-warning card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash mb-2">Luka - luka</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="mb-4">34</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-primary card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-2">Hilang</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="text-white mb-4">11</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-success card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-2">Menderita & Mengungsi</h4>
                        <div class="row">
                          <div class="col-sm-10">
                            <h2 class="text-white mb-4">140</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    {{-- <p><h4 class="card-title">Grafik Batang</h4> --}}
                    <div id="container"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h3><b>Data Kebutuhan Penanggulan Bencana</b></h3><br>
  <div class="row">
    <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
      <div class="card bg-warning">
        <div class="card-body">
          <h4 class="card-title">Banjir - Kayu Manis</h4>
          <p class="card-description text-black">Update : 26 Oktober 2022</p>
          <div class="row">
            <div class="col-md-4">
              <h5>Pangan :</h5>
              <ul class="list-ticked">
                <li>Beras</li>
                <li>Buah - buahan</li>
                <li>Sayuran</li>
                <li>Minyak goreng</li>
                <li>Telor</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Sandang :</h5>
              <ul class="list-ticked">
                <li>Baju</li>
                <li>Celana dalam</li>
                <li>Celana</li>
                <li>Mukena, sarung, sejadah</li>
                <li>Selimut</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Logistik :</h5>
              <ul class="list-ticked">
                <li>Sendal</li>
                <li>Gelas</li>
                <li>Piring</li>
                <li>Panci</li>
                <li>Sendok Garpuh</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Paket Kematian :</h5>
              <ul class="list-ticked">
                <li>Kamper</li>
                <li>Kain Kafan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
      <div class="card bg-warning">
        <div class="card-body">
          <h4 class="card-title">Longsor - Cimahpar</h4>
          <p class="card-description text-black">Update : 25 Oktober 2022</p>
          <div class="row">
            <div class="col-md-4">
              <h5>Pangan :</h5>
              <ul class="list-ticked">
                <li>Beras</li>
                <li>Buah - buahan</li>
                <li>Sayuran</li>
                <li>Minyak goreng</li>
                <li>Telor</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Sandang :</h5>
              <ul class="list-ticked">
                <li>Baju</li>
                <li>Celana dalam</li>
                <li>Celana</li>
                <li>Mukena, sarung, sejadah</li>
                <li>Selimut</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Logistik :</h5>
              <ul class="list-ticked">
                <li>Sendal</li>
                <li>Gelas</li>
                <li>Piring</li>
                <li>Panci</li>
                <li>Sendok Garpuh</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Paket Kematian :</h5>
              <ul class="list-ticked">
                <li>Kamper</li>
                <li>Kain Kafan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
      <div class="card bg-warning">
        <div class="card-body">
          <h4 class="card-title">Pohon tumbang - Panaragan</h4>
          <p class="card-description text-black">Update : 23 Oktober 2022</p>
          <div class="row">
            <div class="col-md-4">
              <h5>Pangan :</h5>
              <ul class="list-ticked">
                <li>Beras</li>
                <li>Buah - buahan</li>
                <li>Sayuran</li>
                <li>Minyak goreng</li>
                <li>Telor</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Sandang :</h5>
              <ul class="list-ticked">
                <li>Baju</li>
                <li>Celana dalam</li>
                <li>Celana</li>
                <li>Mukena, sarung, sejadah</li>
                <li>Selimut</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Logistik :</h5>
              <ul class="list-ticked">
                <li>Sendal</li>
                <li>Gelas</li>
                <li>Piring</li>
                <li>Panci</li>
                <li>Sendok Garpuh</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Paket Kematian :</h5>
              <ul class="list-ticked">
                <li>Kamper</li>
                <li>Kain Kafan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
      <div class="card bg-warning">
        <div class="card-body">
          <h4 class="card-title">Longsor - Menteng</h4>
          <p class="card-description text-black">Update : 22 Oktober 2022</p>
          <div class="row">
            <div class="col-md-4">
              <h5>Pangan :</h5>
              <ul class="list-ticked">
                <li>Beras</li>
                <li>Buah - buahan</li>
                <li>Sayuran</li>
                <li>Minyak goreng</li>
                <li>Telor</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Sandang :</h5>
              <ul class="list-ticked">
                <li>Baju</li>
                <li>Celana dalam</li>
                <li>Celana</li>
                <li>Mukena, sarung, sejadah</li>
                <li>Selimut</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Logistik :</h5>
              <ul class="list-ticked">
                <li>Sendal</li>
                <li>Gelas</li>
                <li>Piring</li>
                <li>Panci</li>
                <li>Sendok Garpuh</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Paket Kematian :</h5>
              <ul class="list-ticked">
                <li>Kamper</li>
                <li>Kain Kafan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
      <div class="card bg-warning">
        <div class="card-body">
          <h4 class="card-title">Kebakaran - Pasir Kuda</h4>
          <p class="card-description text-black">Update : 21 Oktober 2022</p>
          <div class="row">
            <div class="col-md-4">
              <h5>Pangan :</h5>
              <ul class="list-ticked">
                <li>Beras</li>
                <li>Buah - buahan</li>
                <li>Sayuran</li>
                <li>Minyak goreng</li>
                <li>Telor</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Sandang :</h5>
              <ul class="list-ticked">
                <li>Baju</li>
                <li>Celana dalam</li>
                <li>Celana</li>
                <li>Mukena, sarung, sejadah</li>
                <li>Selimut</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Logistik :</h5>
              <ul class="list-ticked">
                <li>Sendal</li>
                <li>Gelas</li>
                <li>Piring</li>
                <li>Panci</li>
                <li>Sendok Garpuh</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Paket Kematian :</h5>
              <ul class="list-ticked">
                <li>Kamper</li>
                <li>Kain Kafan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
      <div class="card bg-warning">
        <div class="card-body">
          <h4 class="card-title">Banjir - Sempur</h4>
          <p class="card-description text-black">Update : 21 Oktober 2022</p>
          <div class="row">
            <div class="col-md-4">
              <h5>Pangan :</h5>
              <ul class="list-ticked">
                <li>Beras</li>
                <li>Buah - buahan</li>
                <li>Sayuran</li>
                <li>Minyak goreng</li>
                <li>Telor</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Sandang :</h5>
              <ul class="list-ticked">
                <li>Baju</li>
                <li>Celana dalam</li>
                <li>Celana</li>
                <li>Mukena, sarung, sejadah</li>
                <li>Selimut</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Logistik :</h5>
              <ul class="list-ticked">
                <li>Sendal</li>
                <li>Gelas</li>
                <li>Piring</li>
                <li>Panci</li>
                <li>Sendok Garpuh</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Paket Kematian :</h5>
              <ul class="list-ticked">
                <li>Kamper</li>
                <li>Kain Kafan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
