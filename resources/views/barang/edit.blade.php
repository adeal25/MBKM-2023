@extends('layout.theme')
@section('content')
    <div class="container-fluid mt-n22 px-6">
        
        <div class="card">
            <div class="card-header">
                <h5>FORM EDIT BARANG {{ $item->name }}</h5>                  
            </div>
            <div class="card-body">

                {{-- <form class="row g-3 need-validation" novalidate action="{{ route('inputBarang.get') }}"> --}}
                <form method="POST" class="row g-3" action="{{ route('barang.update',['id'=>$item->id]) }}">
                    @method("PATCH")
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">
                            Nama Barang
                        </label>
                        <input type="text" class="form-control" id="inputName" name="name"
                            value="{{ $item->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="inputType" class="form-label">
                            Tipe
                        </label>
                        <select class="form-select" name="type" id="inputType" required>
                            <option selected disabled value="">Pilih Tipe...</option>
                            <option value="Habis Pakai" {{ "Habis Pakai" == $item->type? 'selected' : '' }}>Habis Pakai</option>
                            <option value="Non Habis Pakai" {{ "Non Habis Pakai" == $item->type? 'selected' : '' }}>Non Habis Pakai</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputCondition" class="form-label">
                            Kondisi
                        </label>
                        <select class="form-select" name="condition" id="inputCondition" required>
                            <option selected disabled value="">Pilih Kondisi...</option>
                            <option value="Baik" {{ "Baik" == $item->condition? 'selected' : '' }}>Baik</option>
                            <option value="Rusak" {{ "Rusak" == $item->condition? 'selected' : '' }}>Rusak</option>
                            <option value="Perbaikan" {{ "Perbaikan" == $item->condition? 'selected' : '' }}>Perbaikan</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputQty" class="form-label">
                            Kuantitas
                        </label>
                        <input value="{{ $item->quantity }}" type="number" class="form-control" id="inputQty" name="quantity" required>
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
