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
                    <a href="{{ url('mahasiswa-form-add') }}" class="btn btn-white">+ Add Mahasiswa</a>
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
                        <h4 class="mb-0">Data Mahasiswa</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Mahasiwa</th>
                                    <th>NIM</th>
                                    <th>Email</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $student)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $student->name }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $student->nim }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $student->email }}
                                        </td>
                                        <td class="align-middle">{{ $student->department }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $student->class }}
                                        </td>

                                        <td class="align-middle text-dark">
                                            <a class="btn btn-light btn-icon rounded-circle indicator
                                        indicator-primary text-muted bg-warning "
                                                href="#" role="button" id="edit">
                                                <i class="icon-xs" data-feather="edit-3" color="grey"></i>
                                            </a>
                                            <form method="post" action="{{ route('mahasiswa.destroy', ['id' => $student->id]) }}"
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

                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">View All Students</a>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
