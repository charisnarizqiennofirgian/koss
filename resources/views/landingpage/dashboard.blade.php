@extends('landingpage.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 px-1 shadow">
            <div class="nav flex-column flex-nowrap vh-100 overflow-auto p-2">
              <a href="dashboard_pk.html" class="nav-link side active"><i class="bi bi-grid"></i>Dashboard</a>
              <a href="dashboard-kos" class="nav-link side"><i class="bi bi-house-door"></i>Home</a>
            </div>
        </div>
        
        <div class="col-10 " id="main">
            <div class="row">
              <div class="col-sm-6">
                <div class="container pt-5 pb-5">
                  <div class="card shadow p-4">
                    <div class="card-title">
                      <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title d-inline justify-content-between mt-1">Tagihan Penyewa</h4>
                        <span class="font-weight-bold float-right">Desember 2022</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-md-12 d-flex justify-content-center">
                            <div class="d-flex align-items-center box-check">
                              <div class="d-flex information align-items-center">
                              <h1 class="text-success">6</h1>
                                <h5 class="pl-2">Sudah Bayar</h5>
                              </div>
                              <a class="button-next" href="#"> > </a>
                            </div>
                          </div>
                          <div class="col-md-12 d-flex justify-content-center mt-2">
                            <div class="d-flex align-items-center box-check">
                              <div class="d-flex information align-items-center">
                              <h1 class="text-danger">3</h1>
                                <h5 class="pl-2">Belum Bayar</h5>
                              </div>
                              <a class="button-next" href="#"> > </a>
                            </div>
                          </div>
                          <div class="col-md-12 d-flex justify-content-center mt-2">
                            <a href="#" class="btn btn-outline-dark shadow mt-1 custom">Lihat Tagihan Penyewa</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <div class="container pt-5 pb-5">
                  <div class="card shadow p-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xs-12 col-md-6">
                          <div class="d-flex align-items-center box-checks">
                            <div class="d-flex information align-items-center">
                            <h1 class="text-dark">0</h1>
                              <h5 class="pl-2">Permintaan Sewa</h5>
                            </div>
                         
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                          <div class="d-flex align-items-center box-checks">
                            <div class="d-flex information align-items-center">
                            <h1 class="text-dark">0</h1>
                              <h5 class="pl-2">Permintaan Sewa</h5>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-md-12 d-flex justify-content-center mt-2">
                        <a href="#" class="btn btn-outline-dark shadow mt-1 custom">Kelola Booking</a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-sm-6 -->
              <div class="col-sm-6">
                <div class="container pt-5 pb-5">
                  <div class="card shadow p-4">
                    <div class="card-title">
                      <h4>Penyewa</h4>
                    </div>
                    <div class="card-body">
                      <!-- START DISINI -->
                      <div class="row">
                        <div class="col-md-5">
                          <div class=" d-md-flex align-items-center">
                            <div class="d-flex justify-content-between mb-4">
                              <div class="user-info">
                                <div class="user-info__img">
                                  <img src="https://kiranworkspace.com/demo/projects/code-snippets/card/appointment-card/img/user1.jpg" alt="User Img">
                                </div>
                                <div class="user-info__basic">
                                  <h5 class="mb-0">Kiran Air</h5>
                                  <p class="text-muted mb-0">Kamar 8</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-5 d-flex justify-content-end align-items-center">
                          <h6 class="stats-pembayaran">Belum Dibayar</h6>
                          
                        </div>
                      </div>
                      <!-- END DISINI -->
                      
                      <div class="row">
                        <div class="col-md-5">
                          <div class=" d-md-flex align-items-center">
                            <div class="d-flex justify-content-between mb-4">
                              <div class="user-info">
                                <div class="user-info__img">
                                  <img src="https://kiranworkspace.com/demo/projects/code-snippets/card/appointment-card/img/user1.jpg" alt="User Img">
                                </div>
                                <div class="user-info__basic">
                                  <h5 class="mb-0">Kiran Air</h5>
                                  <p class="text-muted mb-0">Kamar 8</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-5 d-flex justify-content-end align-items-center">
                          <h6 class="stats-pembayaran">Belum Dibayar</h6>
                          
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-5">
                          <div class=" d-md-flex align-items-center">
                            <div class="d-flex justify-content-between mb-4">
                              <div class="user-info">
                                <div class="user-info__img">
                                  <img src="https://kiranworkspace.com/demo/projects/code-snippets/card/appointment-card/img/user1.jpg" alt="User Img">
                                </div>
                                <div class="user-info__basic">
                                  <h5 class="mb-0">Kiran Air</h5>
                                  <p class="text-muted mb-0">Kamar 8</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-5 d-flex justify-content-end align-items-center">
                          <h6 class="stats-pembayaran">Belum Dibayar</h6>
                          
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-5">
                          <div class=" d-md-flex align-items-center">
                            <div class="d-flex justify-content-between mb-4">
                              <div class="user-info">
                                <div class="user-info__img">
                                  <img src="https://kiranworkspace.com/demo/projects/code-snippets/card/appointment-card/img/user1.jpg" alt="User Img">
                                </div>
                                <div class="user-info__basic">
                                  <h5 class="mb-0">Kiran Air</h5>
                                  <p class="text-muted mb-0">Kamar 8</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-5 d-flex justify-content-end align-items-center">
                          <h6 class="stats-pembayaran">Belum Dibayar</h6>
                          
                        </div>
                      </div>

                      
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-12 d-flex justify-content-center mt-2">
                            <a href="#" class="btn btn-outline-dark shadow mt-1 custom" style="width: 100%;">+Tambah Penyewa</a>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
</div>
@endsection