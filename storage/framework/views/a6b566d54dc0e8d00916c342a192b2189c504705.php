<?php $__env->startSection('CSS'); ?>
    <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/datagrid/datatables/datatables.bundle.css')); ?>">
    <!-- page related CSS below -->
    <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/formplugins/select2/select2.bundle.css')); ?>">
    <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css')); ?>">
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('JS'); ?>

    <script src="<?php echo e(asset('js/datagrid/datatables/datatables.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme.js')); ?>"></script>
    <script src="js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script>
    $(document).ready(function()
    {   
        $('#dt-basic-example').dataTable(
        {
            scrollY: 500,
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            // fixedColumns:
            // {
            //     leftColumns: 3,
            //     rightColumns:1
            // },
               
        });
    });
    </script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('Content'); ?>
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<!-- /////////////////////////////// Toast CTRL /////////////////////////////// -->
    <div class="alert bg-fusion-400 border-0 fade" style="display:none;" id="suksesedit" role="alert">
    <div class="d-flex align-items-center">
        <div class="alert-icon">
            <i class="fal fa-edit text-warning"></i>
        </div>
        <div class="flex-1">
            <span class="h5">Sukses Update Data</span>  
        </div>
    </div>
    </div>

    <div class="alert bg-fusion-400 border-0 fade" style="display:none;" id="suksesadd" role="alert">
    <div class="d-flex align-items-center">
        <div class="alert-icon">
            <i class="fal fa-shield-check text-warning"></i>
        </div>
        <div class="flex-1">
            <span class="h5">Sukses Tambah Data</span>  
        </div>
    </div>
    </div>

    <div class="alert bg-fusion-400 border-0 fade" style="display:none;" id="suksesdel" role="alert">
    <div class="d-flex align-items-center">
        <div class="alert-icon">
            <i class="fal fa-trash text-warning"></i>
        </div>
        <div class="flex-1">
            <span class="h5">Sukses Hapus data</span>  
        </div>
    </div>
    </div>

    <?php if(session()->has('successedit')): ?>
    <script>
        $("#suksesedit").fadeTo(5000, 900).slideUp(900, function(){
            $("#suksesedit").slideUp(900);
        });
    </script>
    <?php endif; ?>
    <?php if(session()->has('successadd')): ?>
    <script>
        $("#suksesadd").fadeTo(5000, 900).slideUp(900, function(){
            $("#suksesadd").slideUp(900);
        });
    </script>
    <?php endif; ?>
    <?php if(session()->has('successdelete')): ?>
    <script>
        $("#suksesdel").fadeTo(5000, 900).slideUp(900, function(){
            $("#suksesdel").slideUp(900);
        });
    </script>
    <?php endif; ?>
<!-- /////////////////////////////// Error Code /////////////////////////////// --> 
    <?php if($errors->any()): ?>
        <?php if($errors->addguru): ?>
        <script>
            $(document).ready(function(){
                $('#adddata').modal({show: true});
            });
        </script>
        <?php endif; ?>
        <?php if($errors->edit): ?>
            
        <?php endif; ?>
    <?php endif; ?>
<!-- ///////////////////////////////////////////////////////////////////////// -->
    <ol class="breadcrumb page-breadcrumb ">
    <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item">Guru</li>
        <li class="breadcrumb-item active">Daftar Guru</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Guru
                        </h2>
                        <div class="panel-toolbar">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#adddata"><span style="color:white;">Add Data</span></a>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                <thead class="thead-dark">
                                    <tr style="text-align:center; width:1px; white-space:nowrap;">
                                        <th>No</th>
                                        <th>Nomor Identitas</th>
                                        <th>Nama Lengkap</th>
                                        <th>Status</th>
                                        <th>Instansi</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tempat Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>Domisili</th>
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $r=1 ?>
                                    <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr style="width:1px; white-space:nowrap;">
                                        <td style="text-align:center" ><?php echo $r++ ?></td>
                                        <td> <?php echo e($i->no_identitas); ?></td>
                                        <td> <?php echo e($i->nama_depan); ?><span> <span><?php echo e($i->nama_belakang); ?></td>
                                        <td style="text-align:center">
                                            <?php if($i->status_aktif == 'Aktif'): ?>
                                                <span class="badge badge-success">Aktif</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Tidak Aktif</span>
                                            <?php endif; ?>
                                        </td>
                                        <td> <?php echo e($i->instansi->nama); ?></td>
                                        <td> <?php echo e($i->tanggal_lahir); ?></td>
                                        <td> <?php echo e($i->tempat_lahir); ?></td>
                                        <td> <?php echo e($i->jenis_kelamin); ?></td>
                                        <td> <?php echo e($i->agama); ?></td>
                                        <td> <?php echo e($i->alamat); ?></td>
                                        <td> <?php echo e($i->alamat_domisili); ?></td>
                                        <td> <?php echo e($i->no_telp); ?></td>
                                        <td> <?php echo e($i->email); ?></td>
                                        <td> <?php echo e($i->tanggal_masuk); ?></td>
                                        <td style="text-align:center">
                                            <?php if($i->status_aktif == 'Aktif'): ?>
                                                ~
                                            <?php else: ?>
                                                <?php echo e($i->tanggal_keluar); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td style="text-align:center">  
                                            <a href="#" data-toggle="modal" onclick="deleteData(<?php echo e($i->id); ?>)" data-target="#DeleteModal" class="btn btn-sm btn-danger"> Delete</a>
                                            <a href="#" data-toggle="modal" 
                                            onclick="editData( 
                                                '<?php echo e($i->id); ?>',
                                                '<?php echo e($i->no_identitas); ?>',
                                                '<?php echo e($i->nama_depan); ?>', 
                                                '<?php echo e($i->nama_belakang); ?>',
                                                '<?php echo e($i->tanggal_lahir); ?>',
                                                '<?php echo e($i->tempat_lahir); ?>',
                                                '<?php echo e($i->jenis_kelamin); ?>',
                                                '<?php echo e($i->agama); ?>',
                                                '<?php echo e($i->alamat); ?>',
                                                '<?php echo e($i->alamat_domisili); ?>',
                                                '<?php echo e($i->no_telp); ?>',
                                                '<?php echo e($i->email); ?>',
                                                '<?php echo e($i->tanggal_masuk); ?>',
                                                '<?php echo e($i->tanggal_keluar); ?>',
                                                '<?php echo e($i->status_aktif); ?>',
                                                '<?php echo e($i->instansi->kode); ?>',)"
                                            data-target="#editdata" class="btn btn-sm btn-primary"> Edit</a>
                                        </td>
                                    </tr>                                              
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <!-- datatable end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ///////////////////////////////////////////////////////////////////////// -->  
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- ///////////////////////////////////////////////////////////////////////// -->

<!-- /////////////////////////////// Modal Tambah Data /////////////////////////////// -->
        <div class="modal fade bd-example-modal-lg" id="adddata" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="/admin/tambah_guru" method="POST">
                <?php echo e(csrf_field()); ?>

                <!--Body-->
                
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput1">Nomor Identitas</label>
                            <input required value="<?php echo e(old('no_identitas')); ?>" type="text" name="no_identitas" class="form-control" id="formGroupExampleInput1" placeholder="Nomor Identitas">
                            <?php if($errors->has('no_identitas')): ?>
                                <div class="invalid-feedback d-block"> 
                                    Nomor Identitas Sudah Terdaftar
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Nama Depan</label>
                                    <input required value="<?php echo e(old('nama_depan')); ?>" type="text" name="nama_depan" class="form-control" id="formGroupExampleInput2" placeholder="Nama Depan">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput23">Nama Belakang</label>
                                    <input value="<?php echo e(old('nama_belakang')); ?>" type="text" name="nama_belakang" class="form-control" id="formGroupExampleInput23" placeholder="Nama Belakang">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 mb-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput24">Tempat Lahir</label>
                                    <input required value="<?php echo e(old('tempat_lahir')); ?>" type="text" name="tempat_lahir" class="form-control" id="formGroupExampleInput24" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="form-group">
                                    <label class="" for="datepicker-3">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <input required  type="text" autocomplete="off" value="<?php echo e(old('tanggal_lahir')); ?>" name="tanggal_lahir" class="form-control" id="datepicker-3" placeholder="Tanggal Lahir">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fal fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput26">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="inputState" class="form-control" required>
                                        <option value="" disabled selected>Pilih.....</option>
                                        <option value="L" <?php echo e(old('jenis_kelamin') == 'L' ? 'selected' : ''); ?>>Laki-Laki</option>
                                        <option value="P" <?php echo e(old('jenis_kelamin') == 'P' ? 'selected' : ''); ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput27">Agama  </label>
                                    <input value="<?php echo e(old('agama')); ?>" required type="text" name="agama" class="form-control" id="formGroupExampleInput27" placeholder="Agama">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput28">Alamat</label>
                                    <input value="<?php echo e(old('alamat')); ?>" required type="text" name="alamat" class="form-control" id="formGroupExampleInput28" placeholder="Alamat">
                                    <small id="alamatHelp" class="form-text text-muted">Alamat Sesuai KTP</small>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput29">Alamat Domisili</label>
                                    <input required value="<?php echo e(old('alamat_domisili')); ?>" type="text" name="alamat_domisili" class="form-control" id="formGroupExampleInput29" placeholder="Alamat Domisili">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput211">Telepon</label>
                                    <input required value="<?php echo e(old('no_telp')); ?>" type="text" name="no_telp" class="form-control" id="formGroupExampleInput212" placeholder="Telepon">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput213">Email</label>
                                    <input required value="<?php echo e(old('email')); ?>" type="text" name="email" class="form-control" id="formGroupExampleInput214" placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput216">Status  </label>
                                    <select name="status_aktif" id="status_aktif1" class="form-control" required>
                                        <option value="" disabled selected>Pilih.....</option>
                                        <option value="Aktif" <?php echo e(old('status_aktif') == 'Aktif' ? 'selected' : ''); ?>>Aktif</option>
                                        <option value="Tidak Aktif" <?php echo e(old('status_aktif') == 'Tidak Aktif' ? 'selected' : ''); ?>>Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="form-group">
                                    <label class="">Tanggal Masuk</label>
                                    <div class="input-group">
                                        <input required  type="text" autocomplete="off" value="<?php echo e(old('tanggal_masuk')); ?>" name="tanggal_masuk" class="form-control" id="tanggal_masuk" placeholder="Tanggal Masuk">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fal fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="form-group">
                                    <label class="">Tanggal Keluar</label>
                                    <div class="input-group">
                                        <input type="text" autocomplete="off" value="<?php echo e(old('tanggal_keluar')); ?>" name="tanggal_keluar" class="form-control" id="tanggal_keluar" placeholder="Tanggal Keluar">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fal fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput218">Instansi  </label>
                                    <select name="kode_instansi" id="kode_instansi" class="form-control" required>
                                        <option value="" disabled selected>Pilih.....</option>                                       
                                        <?php $__currentLoopData = $instansi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ins->kode); ?>" <?php echo e((old("kode_instansi") == $ins->kode ? "selected":"")); ?>><?php echo e($ins->kode); ?> - <?php echo e($ins->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput219">Nama Pengguna</label>
                                    <input required value="<?php echo e(old('username')); ?>" type="text" name="username" class="form-control" id="formGroupExampleInput219" placeholder="Username">
                                    <small id="usernameHelp" class="form-text text-muted">Berisi antara 3-12 karakter tanpa spasi</small>
                                    <?php if($errors->has('username')): ?>
                                        <div class="invalid-feedback d-block"> 
                                            Username sudah terdaftar atau tidak sesuai aturan
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="formGroupExampleInput221">Password</label>
                                    <input required value="<?php echo e(old('password')); ?>" type="password" id="password" name="password" class="form-control" id="formGroupExampleInput221" placeholder="Password">
                                    <small id="passwordHelp" class="form-text text-muted">Minimal 8 karakter tanpa spasi</small>
                                    <input type="checkbox" onclick="showpass()">&nbsp;Tampilkan Password
                                    <?php if($errors->has('password')): ?>
                                        <div class="invalid-feedback d-block"> 
                                            Password tidak sesuai aturan
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
                    </div>
                    
                </form>

            </div>
        </div>
        </div>

        <script>
            function showpass() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>

        <script>          
            document.getElementById('status_aktif').addEventListener('change', function() {
                if(this.value == 'Tidak Aktif')
                {
                    $("#tanggal_keluar").attr('required', '');
                }
                else
                {
                    $("#tanggal_keluar").removeAttr('required');
                }
            });
        </script>

        <script src="<?php echo e(asset('js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js')); ?>"></script>
        <script>
            var controls = {
                leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
                rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
            }
            jQuery(document).ready(function($){
                // enable clear button 
                $('#datepicker-3').datepicker(
                {
                    format: 'yyyy-mm-dd',
                    todayBtn: "linked",
                    clearBtn: true,
                    todayHighlight: true,
                    templates: controls
                });
                $('#tanggal_masuk').datepicker(
                {
                    format: 'yyyy-mm-dd',
                    todayBtn: "linked",
                    clearBtn: true,
                    todayHighlight: true,
                    templates: controls
                });
                $('#tanggal_keluar').datepicker(
                {
                    format: 'yyyy-mm-dd',
                    todayBtn: "linked",
                    clearBtn: true,
                    todayHighlight: true,
                    templates: controls
                });
            })
        </script>

<!-- /////////////////////////////// Modal Hapus Data /////////////////////////////// -->

   <!-- Central Modal Medium Danger -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify modal-danger" role="document">
    <!--Content-->
    <form action="" id="deleteForm" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
        <p class="heading lead">Konfirmasi hapus data </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
        </button>
        </div>

        <!--Body-->
        <div class="modal-body">
        <div class="text-center">
        <!-- <i class="fas fa-trash-alt"></i> -->
            <i class="fal fa-trash fa-6x mb-3"></i>
            <p>Apakah anda yakin akan menghapus data</p>
            <h2><span class="badge"></span></h2>
        </div>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Ya, Hapus</button>
        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Batal</button>
        </div>

    </div>
    </form>
    <!--/.Content-->
    </div>
    </div>
    <!-- Central Modal Medium Danger-->


    <script type="text/javascript">
        function deleteData(id)
        {
            var id = id;
            var url = "/admin/hapus_guru/"+id;
            $("#deleteForm").attr('action', url);
        }

        function formSubmit()
        {
            $("#deleteForm").submit();
        }
    </script>


<!-- /////////////////////////////// Modal Edit Data /////////////////////////////// -->

    <div class="modal fade bd-example-modal-lg" id="editdata" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rubah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" id="editForm" method="POST">
            <?php echo e(csrf_field()); ?>

            <!--Body-->
                <div class="modal-body">
                    <input type="hidden" name="id" id="f0" class="form-control">

                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Nama Depan</label>
                                <input required type="text" name="nama_depan" class="form-control" id="f2" placeholder="Nama Depan">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Nama Belakang</label>
                                <input type="text" name="nama_belakang" class="form-control" id="f3" placeholder="Nama Belakang">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Tempat Lahir</label>
                                <input required type="text" name="tempat_lahir" class="form-control" id="f4" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label class="">Tanggal Lahir</label>
                                <div class="input-group">
                                <input required  type="text" autocomplete="off" name="tanggal_lahir" class="form-control" id="tanggal_lahir2" placeholder="tanggal_lahir">
                                    <div class="input-group-append">
                                        <span class="input-group-text fs-xl">
                                            <i class="fal fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="f6" class="form-control" required>
                                    <option value="" disabled selected>Pilih.....</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label for="f7"> Agama </label>
                                <input required type="text" name="agama" class="form-control" id="f7" placeholder="Agama">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Alamat</label>
                                <input required type="text" name="alamat" class="form-control" id="f8" placeholder="Alamat">
                                <small id="alamatHelp" class="form-text text-muted">Alamat Sesuai KTP</small>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Alamat Domisili</label>
                                <input required type="text" name="alamat_domisili" class="form-control" id="f9" placeholder="Alamat Domisili">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Telepon</label>
                                <input required type="text" name="no_telp" class="form-control" id="f10" placeholder="Telepon">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Email</label>
                                <input required type="text" name="email" class="form-control" id="f11" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Status  </label>
                                <select name="status_aktif" id="f14" class="form-control" required>
                                    <option value="" disabled>Pilih.....</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="form-group">
                            <label class="">Tanggal Masuk</label>
                            <div class="input-group">
                            <input required  type="text" autocomplete="off" name="tanggal_masuk" class="form-control" id="tanggal_masuk2" placeholder="Tanggal Masuk">
                                <div class="input-group-append">
                                    <span class="input-group-text fs-xl">
                                        <i class="fal fa-calendar-alt"></i>
                                    </span>
                                </div>
                             </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label class="">Tanggal Keluar</label>
                                <div class="input-group">
                                <input required  type="text" autocomplete="off" name="tanggal_keluar" class="form-control" id="tanggal_keluar2" placeholder="Tanggal Keluar">
                                    <div class="input-group-append">
                                        <span class="input-group-text fs-xl">
                                            <i class="fal fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Instansi  </label>
                                <select name="kode_instansi" id="f15" class="form-control" required>                                    
                                    <?php $__currentLoopData = $instansi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ins->kode); ?>"><?php echo e($ins->kode); ?> - <?php echo e($ins->nama); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary btn-sm" >Simpan</button>
                    <button type="button" class="btn btn-light btn-sm waves-effect" data-dismiss="modal">Batal</button>
                </div>
                
            </form>

        </div>
    </div>
    </div>


        <script type="text/javascript">
            function editData(id, no_identitas, nama_depan, nama_belakang, tanggal_lahir, tempat_lahir, jenis_kelamin, agama, alamat, alamat_domisili, no_telp, email, tanggal_masuk, tanggal_keluar, status_aktif, kode_instansi)
            {   document.getElementById("f0").value = id;
                // document.getElementById("f1").value = no_identitas;
                document.getElementById("f2").value = nama_depan;
                document.getElementById("f3").value = nama_belakang;
                document.getElementById("f4").value = tempat_lahir;
                document.getElementById("tanggal_lahir2").value = tanggal_lahir;
                document.getElementById("f6").value = jenis_kelamin;
                document.getElementById("f7").value = agama;
                document.getElementById("f8").value = alamat;
                document.getElementById("f9").value = alamat_domisili;
                document.getElementById("f10").value = no_telp;
                document.getElementById("f11").value = email;
                document.getElementById("tanggal_masuk2").value = tanggal_masuk;
                document.getElementById("tanggal_keluar2").value = tanggal_keluar;
                document.getElementById("f14").value = status_aktif;
                document.getElementById("f15").value = kode_instansi;


                var id = id;
                var url = "/admin/edit_guru/"+id;
                $("#editForm").attr('action', url);
            }
            function showpass2() {
                var x = document.getElementById("f17");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <script>          
            document.getElementById('f14').addEventListener('change', function() {
                if(this.value == 'Tidak Aktif')
                {
                    $("#tanggal_keluar2").attr('required', '');
                }
                else
                {
                    $("#tanggal_keluar2").removeAttr('required');
                }
            });
        </script>

    <script>
            var controls = {
                leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
                rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
            }
            jQuery(document).ready(function($){
                // enable clear button 
                $('#tanggal_lahir2').datepicker(
                {
                    format: 'yyyy-mm-dd',
                    todayBtn: "linked",
                    clearBtn: true,
                    todayHighlight: true,
                    templates: controls
                });
                $('#tanggal_masuk2').datepicker(
                {
                    format: 'yyyy-mm-dd',
                    todayBtn: "linked",
                    clearBtn: true,
                    todayHighlight: true,
                    templates: controls
                });
                $('#tanggal_keluar2').datepicker(
                {
                    format: 'yyyy-mm-dd',
                    todayBtn: "linked",
                    clearBtn: true,
                    todayHighlight: true,
                    templates: controls
                });
            })
        </script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_05\laravel Fix auth crud_2\resources\views/admin/guru/guru.blade.php ENDPATH**/ ?>