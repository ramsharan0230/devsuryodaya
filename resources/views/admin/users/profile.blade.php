@extends('layouts.app-master')
@section('title', 'Users')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> User</x-slot>
    <x-slot name="subTitle"> Profile</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')

<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('assets/img/logo.jpeg') }}" class="bg-light w-100 h-100 rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                        <h4 class="mb-0 mt-2"> {{ $user->name}} </h4>
                        <p class="text-muted fs-14">{{ $user->email }}</p>

                        <div class="text-start mt-3">
                            <p class="header-title mb-2"><strong>About Me :</strong></p>
                            {{-- <p class="text-muted  mb-3">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type.
                            </p> --}}
                            <p class="text-muted mb-2 "><strong class="text-dark">Full Name :</strong> <span class="ms-2">{{ $user->name }}</span></p>

                            <p class="text-muted mb-2 "><strong class="text-dark">Mobile :</strong><span class="ms-2">(123)123 1234</span></p>

                            <p class="text-muted mb-2 "><strong class="text-dark">Email :</strong> <span class="ms-2 ">{{ $user->email }}</span></p>

                            <p class="text-muted mb-1 "><strong class="text-dark">Location :</strong> <span class="ms-2">Nepal</span></p>
                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card -->

                <!-- Messages-->
                
            </div> <!-- end col-->

            <div class="col-xl-8 col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                            <li class="nav-item">
                                <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                    Permissions
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- end about me section content -->
                            <div class="tab-pane active" id="settings">
                                <form>
                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastname">
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="userbio" class="form-label">Bio</label>
                                                <textarea class="form-control" id="userbio" rows="4"></textarea>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="useremail">
                                                <span class="form-text text-muted">If you want to change email please <a href="javascript: void(0);">click</a> here.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userpassword">
                                                <span class="form-text text-muted">If you want to change password please <a href="javascript: void(0);">click</a> here.</span>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <h5 class="mt-3 mb-4 text-uppercase"><i class="mdi mdi-office me-1"></i> Company Info</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="companyname" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="companyname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="cwebsite" class="form-label">Website</label>
                                                <input type="text" class="form-control" id="cwebsite">
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->


                                    <h5 class="mt-3 mb-4 text-uppercase"><i class="mdi mdi-earth me-1"></i> Social</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="social-fb" class="form-label">Facebook</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                    <input type="text" class="form-control" id="social-fb">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="social-tw" class="form-label">Twitter</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                    <input type="text" class="form-control" id="social-tw">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="social-insta" class="form-label">Instagram</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                    <input type="text" class="form-control" id="social-insta">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="social-lin" class="form-label">Linkedin</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                                    <input type="text" class="form-control" id="social-lin">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="social-sky" class="form-label">Skype</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="mdi mdi-skype"></i></span>
                                                    <input type="text" class="form-control" id="social-sky">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="social-gh" class="form-label">Github</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="mdi mdi-github-face"></i></span>
                                                    <input type="text" class="form-control" id="social-gh">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->

                        </div> <!-- end tab-content -->
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </section>
    <!-- /.content -->
  </div>

  @endsection