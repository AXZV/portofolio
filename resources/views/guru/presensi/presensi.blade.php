@section('CSS')

@endsection
@section('JS')
<script src="{{ asset('js/theme.js') }}"></script>
@endsection

@extends('layouts.master_3')

@section('Content')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!-- /////////////////////////////// Toast CTRL /////////////////////////////// -->
    <div class="alert bg-fusion-400 border-0 fade" style="display:none;" id="suksesedit" role="alert">
        <div class="d-flex align-items-center">
            <div class="alert-icon">
                <i class="fal fa-shield-check text-warning"></i>
            </div>
            <div class="flex-1">
                <span class="h5">Sukses Input Data Presensi</span>  
            </div>
        </div>
    </div>
    @if (session()->has('successadd'))
        <script>
            $("#suksesedit").fadeTo(5000, 900).slideUp(900, function(){
                $("#suksesedit").slideUp(900);
            });
        </script>
    @endif

<!-- ///////////////////////////////////////////////////////////////////////// -->
    <ol class="breadcrumb page-breadcrumb ">
        <li class="breadcrumb-item">Guru</li>
        <li class="breadcrumb-item">Presensi</li>
        <li class="breadcrumb-item active">Daftar Sesi</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fas fa-user-check'></i> Presensi
        </h1>
    </div>
        <!-- Team -->
        <section id="team" class="pb-5">
            <div class="container">
                <!-- <h5 class="section-title h1">Daftar Sesi</h5> -->
                <div class="row">
                    <!-- Team member -->
                    <?php $e=1 ?>
                    @foreach($guru_kelas as $gk)
                        @foreach($pengajaran->where('kode_guru_kelas','=',$gk->kode) as $p)
                            <div class="col-xs-8 col-sm-6 col-md-4"><!-- item -->
                             <!-- Card Narrower -->
                                <div class="card card-cascade mb-4 hover-highlight">
                                    <a href="presensi/log_presensi/{{$p->kode}}">
                                        <div class="card-body card-body-cascade chover-highlight">
                                            <h5 class="text-danger text-italic pb-2 pt-1 font-italic nama-kelas"><i class="fas fa-chalkboard-teacher"></i> #Sesi {{$p->guru_kelas->kelas->nama}}</h5>
                                            <div class="text-center mb-4">
                                                <span class="fas fa-chalkboard-teacher fa-4x text-danger icon-kelas"> </span>
                                            </div>
                                            <div class="row no-gutters row-grid text-dark">
                                                <div class="col-6">
                                                    <div class="text-center py-3">
                                                        <h5 class="mb-0 fw-700">
                                                            Pelajaran
                                                            <small class="text-muted mb-0">{{$p->guru_kelas->kelas->pelajaran->nama}}</small>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-center py-3">
                                                        <h5 class="mb-0 fw-700">
                                                            Siswa
                                                            <small class="text-muted mb-0">{{$p->siswa->count()}} Orang</small>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>                                
                                        </div>
                                    </a>
                                </div>
                            <!-- Card Narrower -->

                            </div><!-- item -->
                        @endforeach
                    @endforeach
                    <!-- ./Team member -->
                </div>
            </div>
        </section>
        <!-- Team -->
<!-- ///////////////////////////////////////////////////////////////////////// -->  
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- ///////////////////////////////////////////////////////////////////////// -->
@endsection