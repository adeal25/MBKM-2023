@extends('layout.theme')
@section('content')
    <div class="container-fluid mt-n22 px-6">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
        @if (Session::has('deleted'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('deleted') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
        <div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0  text-white">MASTER DATA</h3>
                </div>
                <div>
                    <a href="{{ url('barang-form-add') }}" class="btn btn-white">+ Add Barang</a>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <h4 class="mb-0">Data Barang</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jenis</th>
                                    <th>Kondisi</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data->count() > 0)
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex
                align-items-center">
                                                    {{ $item->name }}
                                                </div>
                                            </td>
                                            <td class="align-middle"><span class="badge bg-info">
                                                    <div class="d-flex align-items-center">
                                                        {{ $item->type }}
                                                    </div>
                                                </span>
                                            </td>
                                            <td class="align-middle"><span
                                                    class="badge
                bg-warning">{{ $item->condition }}</span>
                                            </td>
                                            <td class="align-middle ">
                                                {{ $item->quantity }}
                                            </td>
                                            <td class="align-middle text-dark">
                                                <a href="{{ route('barang.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-light btn-icon rounded-circle indicator
                                                indicator-primary text-muted bg-warning"
                                                    role="button" id="edit">
                                                    <i class="icon-xs" data-feather="edit-3" color="grey"></i>
                                                </a>
                                                <form method="post"
                                                    action="{{ route('barang.destroy', ['id' => $item->id]) }}"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button
                                                        class="btn btn-light btn-icon rounded-circle indicator
                                                indicator-primary text-muted bg-danger text-white"
                                                        onclick="return confirm('Your data will deleted permanently, are you sure ?')">
                                                        <i class="icon-xs" data-feather="trash" color="white"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="5">
                                            Product not found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">View All Items</a>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
