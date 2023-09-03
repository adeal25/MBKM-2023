@extends('layout.theme')
@section('content')
    <div class="container-fluid mt-n22 px-6">
        
        <div class="card">
            <div class="card-header">
                <h5>TAMBAH PETUGAS</h5>                  
            </div>
            <div class="card-body">

                <form class="row g-3 need-validation" novalidate action="{{ route('addPetugas.get') }}">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">
                            Nama Petugas
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
                        <input type="text" class="form-control" id="pass" name="password"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">
                            Posisi
                        </label>
                        <input type="text" class="form-control" id="position" name="position"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">
                            Email
                        </label>
                        <input type="text" class="form-control" id="email" name="email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">
                            Level
                        </label>
                        <select class="form-select" name="level" id="disabledSelect" required>
                            <option>Petugas</option>
                            
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
