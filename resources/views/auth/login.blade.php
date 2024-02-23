@extends('layouts.app')

@section('content')
<div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <div class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg text-center" src="{{url('assets/images/logo.png')}}" alt="logo">
                                <img class="logo-light logo-img logo-img-lg text-center" src="{{url('assets/images/logo.png')}}" alt="logo-dark">
                                <h3>On Time Cars</h3>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title text-center">Sign-In</h4>
                                        <div class="nk-block-des mt-2 text-center">
                                            <p>Access the using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div>
                                @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" 
                                            id="email" name="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
@endsection
