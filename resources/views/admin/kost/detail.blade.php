@extends('admin.index')
@section('content')

<div class="wrapper">
    {{-- Sidebar --}}
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Detail Kamar</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Base</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Panels</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{$kost_id['nama_kost']}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="nav flex-column nav-pills nav-secondary" id="v-pills-tab"
                                            role="tablist" aria-orientation="vertical">
                                            <!-- awal image -->
                                            <img class="card-img-top mb-5 mb-md-0"
                                                src="{{ url('admin/img')}}/{{$kost_id->foto_kamar}}"
                                                alt="Profile_kamar">
                                            <!-- akhir image -->
                                            <br />
                                            <a href="{{url('kost')}}" class="btn btn-link"><i
                                                    class="flaticon-back"></i>&nbsp;&nbsp;Back</a>
                                        </div>

                                    </div>

                                    <div class="col-7 col-md-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab">
                                                <div class="col col-stats">
                                                    <div class="numbers">
                                                        <p class="card-category">Harga</p>
                                                        <h4 class="card-title">Rp.
                                                            {{number_format($kost_id['harga_kamar'], 2, ',', '. ')}}
                                                        </h4>
                                                        <br />
                                                        <ul>
                                                            <li>@foreach($d_fasilitas as $fs)
                                                                @if($kost_id->id_fasilitas === $fs->id)
                                                                <p>Fasilitas: {{$fs->fasilitas}}</p>
                                                                @endif
                                                                @endforeach
                                                            </li>
                                                            <li>
                                                                <p>Luas Kamar: {{$kost_id['luas_kamar']}}
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>Alamat Kost: {{$kost_id['alamat_kost']}}
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>Keterangan: {{$kost_id['keterangan']}}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab">

                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                aria-labelledby="v-pills-messages-tab">
                                                <p>Pityful a rethoric question ran over her cheek, then she
                                                    continued her way. On her way she met a copy. The copy warned
                                                    the Little Blind Text, that where it came from it would have
                                                    been rewritten a thousand times and everything that was left
                                                    from its origin would be the word "and" and the Little Blind
                                                    Text should turn around and return to its own, safe country.</p>

                                                <p> But nothing the copy said could convince her and so it didn’t
                                                    take long until a few insidious Copy Writers ambushed her, made
                                                    her drunk with Longe and Parole and dragged her into their
                                                    agency, where they abused her for their</p>
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
        @include('admin.footer')
    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Background</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div>
    {{-- End Custom template --}}
</div>


@endsection