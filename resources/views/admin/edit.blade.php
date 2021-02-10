@extends('layouts.app')
@push('adduserscript')
    <script>
        function validateForm() {
            var email = $("#email").val();
            var password = $("#password").val();
            var role = $('select[name=role] option').filter(':selected').val();
            var guru = $('select[name=guru] option').filter(':selected').val();
            var siswa = $('select[name=siswa] option').filter(':selected').val();

            if (role == "Admin") {
                return (
                    validateEmail(email) &&
                    validatePassword(password) &&
                    role != ""
                )
            } else if (role == "Guru") {
                return (
                    validateEmail(email) &&
                    validatePassword(password) &&
                    role != "" &&
                    guru != ""
                )
            } else if (role == "Siswa") {
                return (
                    validateEmail(email) &&
                    validatePassword(password) &&
                    role != "" &&
                    siswa != ""
                )
            } else {
                return false;
            }
        }

        function enableSubmitButton() {
            $('#submit').prop("disabled", false);
        }

        function disableSubmitButton() {
            $('#submit').prop("disabled", true);
        }

        function validateEmail(elementValue) {
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return emailPattern.test(elementValue);
        }

        function validatePassword(elementValue) {
            return elementValue.length >= 8;
        }

        function checkSubmitButton() {
            if (validateForm()) {
                enableSubmitButton();
            } else {
                disableSubmitButton();
            }
        }

        function checkEmail() {
            var email = $("#email").val();
            if (email != "" && !validateEmail(email)) {
                $("#error-email").text("Harap masukkan email valid.");
                $("#valid-email").text("");
                $("#email").addClass('is-invalid');
                $("#email").removeClass('is-valid');
            } else if (email != "" && validateEmail(email)) {
                $("#error-email").text("");
                $("#valid-email").text("Data sudah benar.");
                $("#email").addClass('is-valid');
                $("#email").removeClass('is-invalid');
            } else {
                $("#error-email").text("Harap masukkan email valid.");
                $("#valid-email").text("");
                $("#email").addClass('is-invalid');
                $("#email").removeClass('is-valid');
            }
        }

        function checkPassword() {
            var password = $("#password").val();
            if (password != "" && !validatePassword(password)) {
                $("#error-password").text("Harap masukkan password valid.");
                $("#valid-password").text("");
                $("#password").addClass('is-invalid');
                $("#password").removeClass('is-valid');
            } else if (password != "" && validatePassword(password)) {
                $("#error-password").text("");
                $("#valid-password").text("Data sudah benar.");
                $("#password").addClass('is-valid');
                $("#password").removeClass('is-invalid');
            } else {
                $("#error-password").text("Harap masukkan password valid.");
                $("#valid-password").text("");
                $("#password").addClass('is-invalid');
                $("#password").removeClass('is-valid');
            }
        }

        function checkRole() {
            var selectedRole = $("select.role").children("option:selected").val();
            if (selectedRole == "Guru") {
                $("#div-guru").show();
                $("#div-siswa").hide();
            } else if (selectedRole == "Siswa") {
                $("#div-guru").hide();
                $("#div-siswa").show();
            } else {
                $("#div-guru").hide();
                $("#div-siswa").hide();
            }
        }

        $(document).ready(function() {
            var selectedRole = $("select.role").children("option:selected").val();
            console.log(selectedRole);
            if (selectedRole == "Guru") {
                $("#div-guru").show();
                $("#div-siswa").hide();
            } else if (selectedRole == "Siswa") {
                $("#div-guru").hide();
                $("#div-siswa").show();
            } else {
                $("#div-guru").hide();
                $("#div-siswa").hide();
            }
            checkEmail();
            checkPassword();

            $("#email").change(function() {
                checkEmail();

                checkSubmitButton();
            });

            $("#password").change(function() {
                checkPassword();

                checkSubmitButton();
            });

            $("select.role").change(function() {
                checkRole();

                checkSubmitButton();
            });

            $("select.guru").change(function() {
                checkSubmitButton();
            });

            $("select.siswa").change(function() {
                checkSubmitButton();
            });
        });

    </script>
@endpush
@section('title')
    Edit User
@endsection
@section('body')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="{{ url('/user') }}">Management User</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Edit User</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-status pop up alert--->
                @if (session('status'))
                    <div class="alert alert-success" role="alert"><i class="fa fa-bell"></i>
                        {{ session('status') }}
                    </div>
                    <script>
                        window.setTimeout(function() {
                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                $(this).remove();
                            });
                        }, 1000);

                    </script>
                @endif
        </div>
    </div>

    <!--Modal Edit-->
    <div class="modal-body">
        <form action="{{ url('updateuser/' . $User->id) }}" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
                <label>Id User</label>
                <input type="text" name="id" class="form-control" value="{{ $User->getuserID() }}" readonly>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $User->email }}" autofocus
                    required>
                <span class="valid-feedback" id="valid-email"></span>
                <span class="invalid-feedback" id="error-email"></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control" value="{{ $User->password }}"
                    autofocus required>
                <span class="valid-feedback" id="valid-password"></span>
                <span class="invalid-feedback" id="error-password"></span>
            </div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control role" name="role" id="role" autofocus required>
                    <option selected disabled hidden>-- Pilih Role --</option>
                    <option value="Admin" @if ($User->role == 'Admin')
                        selected @endif>Admin</option>
                    <option value="Guru" @if ($User->role == 'Guru')
                        selected @endif>Guru</option>
                    <option value="Siswa" @if ($User->role == 'Siswa')
                        selected @endif>Siswa</option>
                </select>
            </div>
            <div id="div-guru" class="form-group">
                <label>Guru</label>
                <select class="form-control guru" name="guru" id="guru" autofocus required>
                    @foreach ($Guru as $guru)
                        <option @if ($User->role == 'Admin') selected
                    @endif disabled hidden>-- Pilih Guru --</option>
                    <option value="{{ $guru->id }}" @if ($User->id_personil == $guru->id)
                        selected @endif>({{ $guru->nip }}) {{ $guru->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div id="div-siswa" class="form-group">
                <label>Siswa</label>
                <select class="form-control siswa" name="siswa" id="siswa" autofocus required>
                    @foreach ($Siswa as $siswa)
                        <option @if ($User->role == 'Admin') selected
                    @endif disabled hidden>-- Pilih Siswa --</option>
                    <option value="{{ $siswa->id }}" @if ($User->id_personil == $siswa->id)
                        selected @endif>({{ $siswa->nis }}) {{ $siswa->nama }}</option>
                    @endforeach
                </select>
            </div>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/user') }}" class="btn btn-secondary">Tutup</a>
        <button type="submit" class="btn btn-primary" id="submit">Simpan</button>
    </div>
    </form>
    </div>
    </div>
    </div>
@endsection
@section('footer')
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020. All rights reserved. SMK Insan Mulya Kibin, Kabupaten Serang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
