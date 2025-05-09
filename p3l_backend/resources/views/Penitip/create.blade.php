@extends('Admin.app')

@section('content')

<link rel="stylesheet" href="<?php echo url('/public'); ?>/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<script src="<?php echo url('/public'); ?>/AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
<script src="<?php echo url('/public'); ?>/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<?php //dd($errors->all()) 
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card card-primary">
                <div class="card-header">
                    <h1 style="font-weight: bold; padding: 15px;" ; class="card-title">REGISTRASI PENITIP</h1>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('Penitip.store') }}" method="POST">
                    @csrf

                    <div class="card-body">
                        <div class="form-group col-md-3">
                            <label for="name">Nama <span style="color:red; font-weight:bold" class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Your Answer">
                            <!-- Menampilkan pesan error untuk input form number -->
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nik">NIK <span style="color:red; font-weight:bold" class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nik" id="nik" value="{{ old('nik') }}" placeholder="Your Answer">
                            <!-- Menampilkan pesan error untuk input officer id number -->
                            @if ($errors->has('nik'))
                            <span class="text-danger">{{ $errors->first('nik') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-2">
                            <label for="id_outlet">Manna Kampus (MK) <span style="color:red; font-weight:bold" class="text-danger">*</span></label>
                            <select name="id_outlet" id="id_outlet" class="form-control">
                                <option value="">Pilih MK</option>
                                @foreach ($outlets as $Outlets)
                                <option value="{{ $Outlets->id }}" {{ old('id_outlet') == $Outlets->id ? 'selected' : '' }}>{{ $Outlets->name }}</option>
                                @endforeach
                            </select>
                            <!-- Menampilkan pesan error untuk input outlet -->
                            @if ($errors->has('id_outlet'))
                            <span class="text-danger">{{ $errors->first('id_outlet') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                            <label for="level">Posisi <span style="color:red; font-weight:bold" class="text-danger">*</span></label>
                            <select name="level" id="level" class="form-control">
                                <option value="" disabled selected>Choose</option>
                                <option value="complain_admin" {{ old('level') == 'complain_admin' ? 'selected' : ''}}>Complain Admin</option>
                                <option value="complain_admin_mk" {{ old('level') == 'complain_admin_mk' ? 'selected' : ''}}>Complain Admin MK</option>
                                <option value="req_prod_edp" {{ old('level') == 'req_prod_edp' ? 'selected' : ''}}>Request Product EDP</option>
                                <option value="req_prod_purchasing" {{ old('level') == 'req_prod_purchasing' ? 'selected' : ''}}>Request Product Purchasing</option>
                                <option value="req_prod_admin_mk" {{ old('level') == 'req_prod_admin_mk' ? 'selected' : ''}}>Request Product Admin_MK</option>
                            </select>
                            <?php /* 
                            <input type="text" class="form-control" name="level" id="level" value="{{ old('level') }}" placeholder="Your Answer">
                            */?>
                            <!-- Menampilkan pesan error untuk input level -->
                            @if ($errors->has('level'))
                            <span class="text-danger">{{ $errors->first('level') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-5" style="position: relative;">
                            <label for="password">Password <span style="color:red; font-weight:bold" class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Your Answer">
                            <i id="togglePassword" class="fas fa-eye"></i>
                            <!-- Menampilkan pesan error untuk input password -->
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-5">
                            <label for="passwordConfirm">Konfirmasi Password <span style="color:red; font-weight:bold" class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation" id="passwordConfirm" placeholder="Your Answer">
                            <i id="togglePasswordConfirm" class="fas fa-eye"></i>
                        </div>

                        <div>
                            <p><span style="color:red; font-weight:bold" class="text-danger">*</span> Wajib diisi</p>
                        </div>

                    </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </form>
        </div>
        <!-- /.card -->
        <!-- /.card -->
    </div>
</div>
</div>
<!-- /.row -->

<script>
    // Pilih tombole toggle dan input password
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');
    const togglePasswordConfirm = document.getElementById('togglePasswordConfirm');
    const passwordConfirmField = document.getElementById('passwordConfirm');

    // Fungsi untuk toggle visibilitas password
    togglePassword.addEventListener('click', function(e) {
        // Toggle password input type
        const type1 = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type1;

        // Toggle ikon eye untuk menampilkan dan menyembunyikan password
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    togglePasswordConfirm.addEventListener('click', function(e) {
        // Toggle tipe input password konfirmasi
        const type2 = passwordConfirmField.type === 'password' ? 'text' : 'password';
        passwordConfirmField.type = type2;

        // Toggle ikon eye untuk menampilkan dan menyembunyikan password
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    })
</script>

<style>
    .form-group {
        position: relative;
    }

    .form-control:focus {
        border: 2px solid #007bff;
        /* Menambahkan border tebal berwarna biru saat fokus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        /* Menambahkan efek bayangan */
    }

    .form-control:hover {
        border: 2px solid #007bff;
        /* Menambahkan border tebal berwarna biru saat fokus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        /* Menambahkan efek bayangan */
    }

    #togglePassword {
        position: absolute;
        right: 20px;
        top: 50px;
        transform: translateY(-50%);
        cursor: pointer;
        color: black;
    }

    #togglePassword:hover {
        border: none;
        background-color: transparent;
        color: #007bff;
    }

    #togglePasswordConfirm {
        position: absolute;
        right: 20px;
        top: 50px;
        transform: translateY(-50%);
        cursor: pointer;
        color: black;
    }

    #togglePasswordConfirm:hover {
        border: none;
        background-color: transparent;
        color: #007bff;
    }
</style>

<!-- <script>
    $(function() {

        //Date picker
        $('#inputComplainDate').datetimepicker({
            format: 'L'
        });

    })
</script> -->


@endsection