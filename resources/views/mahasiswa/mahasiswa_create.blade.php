@extends('layout.theme')
@section('content')
    <div class="container-fluid mt-n22 px-6">
        
        <div class="card">
            <div class="card-header">
                <h5>TAMBAH MAHASISWA</h5>                  
            </div>
            <div class="card-body">

                <form class="row g-3 need-validation" novalidate action="{{ route('addMahasiswa.get') }}">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">
                            Nama Mahasiswa
                        </label>
                        <input type="text" class="form-control" id="inputName" name="name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="inputName" class="form-label">
                            Username
                        </label>
                        <input type="text" class="form-control" id="userName" name="username"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="inputName" class="form-label">
                            Password
                        </label>
                        <input type="text" class="form-control" id="inputName" name="password"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="inputName" class="form-label">
                            Nim
                        </label>
                        <input type="text" class="form-control" id="inputName" name="nim"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="inputName" class="form-label">
                            Email
                        </label>
                        <input type="text" class="form-control" id="inputName" name="email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="inputType" class="form-label">
                            Jurusan
                        </label>
                        <select class="form-select" name="department" id="inputType" required>
                            <option selected disabled value="">Pilih Jurusan...</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Informatika</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputQty" class="form-label">
                            Kelas
                        </label>
                        <input type="text" class="form-control" id="inputQty" name="class" required>
                    </div>
                    
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
