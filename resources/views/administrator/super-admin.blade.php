@extends('layout.theme')
@section('content')
    <div class="container-fluid mt-n22 px-6">
        <div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0  text-white">MASTER DATA</h3>
                </div>
                <div>
                    <a href="{{ url('super-admin-form-add') }}" class="btn btn-white">+ Add Admin</a>
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
                        <h4 class="mb-0">Data Admin</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Admin</th>
                                    <th>Posisi</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $admin)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $admin->name }}
                                        </td>
                                        <td class="align-middle"><span class="badge bg-warning">
                                            {{ $admin->position }}</span>

                                        </td>
                                        <td class="align-middle">
                                            {{ $admin->email }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $admin->level }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">View All Super Admin</a>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
