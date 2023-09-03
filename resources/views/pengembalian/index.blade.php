@extends('layout.theme')
@section('content')
    <div class="container-fluid mt-n22 px-6">
        <div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0  text-white">MASTER DATA</h3>
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
                        <h4 class="mb-0">Data Pengembalian</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Deskripsi</th>
                                    <th>Kehilangan</th>
                                    <th>Peminjaman Id</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $applicant_return)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                {{ $applicant_return->date }}

                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                {{ $applicant_return->description }}
                                            </div>
                                        </td>
                                        <td class="align-middle ">
                                            {{ $applicant_return->forfeit }}
                                        </td>
                                        <td class="align-middle ">
                                            {{ $applicant_return->applicant_id }}
                                        </td>
                                        <td class="align-middle text-dark">
                                            <a class="btn btn-light btn-icon rounded-circle indicator
                                            indicator-primary text-muted bg-info "
                                                href="#" role="button" id="detail">
                                                <i class="icon-xs" data-feather="eye" color="white"></i>
                                            </a>

                                            <a class="btn btn-light btn-icon rounded-circle indicator
                                            indicator-primary text-muted bg-warning "
                                                href="#" role="button" id="edit">
                                                <i class="icon-xs" data-feather="edit-3" color="white"></i>
                                            </a>

                                            <a class="btn btn-light btn-icon rounded-circle indicator
                                            indicator-primary text-muted bg-danger text-white "
                                                href="#" role="button" id="delete">
                                                <i class="icon-xs" data-feather="trash" color="white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">View All Applicant Returns</a>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
