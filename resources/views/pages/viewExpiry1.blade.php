@extends('pages.sidebar')
@section('content')



<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>@endif
                            <h3 class="nk-block-title page-title">Expired Documents</h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome to Expired Documents page.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-12">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title"><span class="me-2">Expired Documents</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner p-0 border-top">
                                    <div class="nk-tb-list nk-tb-orders">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>Sr No.</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Driver Name</span></div>
                                            <div class="nk-tb-col"><span>Date Of Birth</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>License Expiry</span></div>
                                            <div class="nk-tb-col"><span>Passport Expiry</span></div>
                                            <div class="nk-tb-col"><span>Badge Expiry</span></div>
                                            <div class="nk-tb-col"><span>DBS Expiry</span></div>
                                            <div class="nk-tb-col"><span>Insurance Expiry</span></div>
                                        </div>
                                        @foreach($getExpiry as $item)

                                        <div class="nk-tb-item">

                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="{{$item->DriverID}}">#{{$item->DriverID}}</a></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="tb-sub">{{$item->DriverName}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub">{{date('d-m-Y',strtotime($item->DateOfBirth))}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dim bg-{{$item->DrivingLicenseExpiry < now() ? 'danger': ($item->DrivingLicenseExpiry > now()->addDays(7) ? 'success':'warning')}}"> {{date('d-m-Y',strtotime($item->DrivingLicenseExpiry))}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dim bg-{{$item->PassportExpiry < now() ? 'danger':($item->PassportExpiry > now()->addDays(7) ? 'success':'warning')}}">{{date('d-m-Y',strtotime($item->PassportExpiry))}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dim  bg-{{$item->BadgeExpiry < now() ? 'danger':($item->BadgeExpiry > now()->addDays(7) ? 'success':'warning')}}">{{date('d-m-Y',strtotime($item->BadgeExpiry))}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dim bg-{{$item->DBSExpiry < now() ? 'danger':($item->DBSExpiry > now()->addDays(7) ? 'success':'warning')}}">{{date('d-m-Y',strtotime($item->DBSExpiry))}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dim bg-{{$item->InsuranceExpiry < now() ? 'danger':($item->InsuranceExpiry > now()->addDays(7) ? 'success':'warning')}}">{{date('d-m-Y',strtotime($item->InsuranceExpiry))}}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection