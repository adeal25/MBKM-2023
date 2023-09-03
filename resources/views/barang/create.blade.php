@extends('layout.theme')
@section('content')
    <div class="container-fluid mt-n22 px-6">
        
        <div class="card">
            <div class="card-header">
                <h5>FORM INPUT BARANG</h5>                  
            </div>
            <div class="card-body">

                {{-- <form class="row g-3 need-validation" novalidate action="{{ route('inputBarang.get') }}"> --}}
                <form class="row g-3 need-validation" novalidate action="{{ route('addBarang.get') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">
                            Nama Barang
                        </label>
                        <input type="text" class="form-control" id="inputName" name="name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="inputType" class="form-label">
                            Tipe
                        </label>
                        <select class="form-select" name="type" id="inputType" required>
                            <option selected disabled value="">Pilih Tipe...</option>
                            <option>Habis Pakai</option>
                            <option>Non Habis Pakai</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputCondition" class="form-label">
                            Kondisi
                        </label>
                        <select class="form-select" name="condition" id="inputCondition" required>
                            <option selected disabled value="">Pilih Kondisi...</option>
                            <option>Baik</option>
                            <option>Rusak</option>
                            <option>Perbaikan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputQty" class="form-label">
                            Kuantitas
                        </label>
                        <input type="text" class="form-control" id="inputQty" name="quantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputAdminId" class="form-label">
                            Id Admin
                        </label>
                        <input type="text" class="form-control" id="inputAdminId" name="admin_id" placeholder="" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
