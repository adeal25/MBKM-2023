@extends('layout.theme')
@section('content')
    <!-- Page content -->

    <!-- Container fluid -->
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">Dashboard SisLab</h3>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
            mb-3">
                            <div>
                                <h4 class="mb-0">Barang</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-2">
                                <i class="bi bi-briefcase fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">80</h1>
                            <p class="mb-0"><span class="text-dark me-2">25</span>Peminjaman</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
            mb-3">
                            <div>
                                <h4 class="mb-0">Lab</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-2">
                                <i class="bi bi-list-task fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">5</h1>
                            <p class="mb-0"><span class="text-dark me-2">5</span>Tersedia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
            mb-3">
                            <div>
                                <h4 class="mb-0">Admin</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-2">
                                <i class="bi bi-people fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">12</h1>
                            <p class="mb-0"><span class="text-dark me-2">1</span>Ka.Lab</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
            mb-3">
                            <div>
                                <h4 class="mb-0">Mahasiswa</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-2">
                                <i class="bi bi-bullseye fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">100</h1>
                            <p class="mb-0"><span class="text-success me-2">89</span>Peminjam</p>
                        </div>
                    </div>
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
                        <h4 class="mb-0">Peminjaman</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Project name</th>
                                    <th>Hours</th>
                                    <th>priority</th>
                                    <th>Members</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex
                    align-items-center">
                                            <div>
                                                <div
                                                    class="icon-shape icon-md border p-4
                        rounded-1">
                                                    <img src="assets/images/brand/dropbox-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox
                                                        Design
                                                        System</a></h5>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">34</td>
                                    <td class="align-middle"><span
                                            class="badge
                    bg-warning">Medium</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-1.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-2.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-3.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span
                                                    class="avatar-initials rounded-circle
                        fs-6">+5</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">15%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:15%"
                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex
                    align-items-center">
                                            <div>
                                                <div
                                                    class="icon-shape icon-md border p-4
                        rounded-1">
                                                    <img src="assets/images/brand/slack-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Slack Team
                                                        UI Design</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">47</td>
                                    <td class="align-middle"><span class="badge
                    bg-danger">High</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-4.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-5.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-6.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span
                                                    class="avatar-initials rounded-circle
                        fs-6">+5</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">35%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:35%"
                                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex
                    align-items-center">
                                            <div>
                                                <div
                                                    class="icon-shape icon-md border p-4
                        rounded-1">
                                                    <img src="assets/images/brand/github-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">GitHub
                                                        Satellite</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">120</td>
                                    <td class="align-middle"><span class="badge bg-info">Low</span></td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-7.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-8.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-9.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span
                                                    class="avatar-initials rounded-circle
                        fs-6">+1</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">75%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex
                    align-items-center">
                                            <div>
                                                <div
                                                    class="icon-shape icon-md border p-4
                        rounded-1">
                                                    <img src="assets/images/brand/3dsmax-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">3D
                                                        Character Modelling</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">89</td>
                                    <td class="align-middle"><span
                                            class="badge
                    bg-warning">Medium</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-10.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-11.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-12.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span
                                                    class="avatar-initials rounded-circle
                        fs-6">+5</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">63%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:63%"
                                                    aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex
                    align-items-center">
                                            <div>
                                                <div
                                                    class="icon-shape icon-md border p-4 rounded
                        bg-primary">
                                                    <img src="assets/images/brand/layers-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Webapp
                                                        Design System</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">108</td>
                                    <td class="align-middle"><span
                                            class="badge
                    bg-success">Track</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-13.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-14.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-15.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span
                                                    class="avatar-initials rounded-circle
                        fs-6">+5</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">100%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width:100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-bottom-0">
                                        <div class="d-flex
                    align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="assets/images/brand/github-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Github
                                                        Event Design</a>
                                                </h5>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle border-bottom-0">120</td>
                                    <td class="align-middle border-bottom-0"><span class="badge bg-info">Low</span>
                                    </td>
                                    <td class="align-middle border-bottom-0">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-13.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-14.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img alt="avatar" src="assets/images/avatar/avatar-15.jpg"
                                                    class="rounded-circle">
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span
                                                    class="avatar-initials rounded-circle
                        fs-6">+1</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark border-bottom-0">
                                        <div class="float-start me-3">75%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">View All Projects</a>

                    </div>
                </div>

            </div>
        </div>
        <!-- row  -->

    </div>
@endsection
