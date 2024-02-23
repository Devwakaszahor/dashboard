@extends('pages.sidebar')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Personal Information</h4>
                                            <div class="nk-block-des">
                                                <p>Basic info, like your name and address, that you use on Nio Platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->


                                @if(session()->has('success'))
                                <div class="alert alert-success mb-3">
                                    {{ session()->get('success') }}
                                </div>
                                @elseif (session()->has('errors'))
                                <div class="alert alert-danger mb-3">
                                    {{ session()->get('errors') }}
                                </div>
                                @endif
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Basics</h6>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Full Name</span>
                                                <span class="data-value">{{ $user->name }}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Display Name</span>
                                                <span class="data-value">{{ $user->name }}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Email</span>
                                                <span class="data-value">{{ $user->email }}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item " data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Password</span>
                                                <span class="data-value">***************</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                    </div><!-- data-list -->
                                </div><!-- .nk-block -->
                            </div>
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title text-center">Update Profile</h5>
                <hr>
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <form action="{{ url('updateProfile') }}" method="POST">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="old_password">Old Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="old_password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="old_password" name="old_password" placeholder="Enter your Old Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="new_password">New Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="new_password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="new_password" name="new_password" placeholder="Enter your Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="confirm_password">Confirm Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="confirm_password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password" placeholder="Re-enter your Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <button class="btn btn-lg btn-primary">Update Profile</button> &nbsp;
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div><!-- .tab-pane -->
            </div><!-- .tab-content -->
        </div><!-- .modal-body -->
    </div><!-- .modal-content -->
</div><!-- .modal-dialog -->
</div><!-- .modal -->

@endsection