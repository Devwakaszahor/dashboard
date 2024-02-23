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

                            <div class="card card-bordered card-preview bordered-top">
                                <div class="card-inner">
                                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Driver Name</th>
                                                <th>Date Of Birth</th>
                                                <th>License Expiry</th>
                                                <th>Passport Expiry</th>
                                                <th>Badge Expiry</th>
                                                <th>DBS Expiry</th>
                                                <th>Insurance Expiry</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($getExpiry as $item)
                                            <tr>
                                                <td>{{ $item->DriverID }}</td>
                                                <td>{{ $item->DriverName }}</td>
                                                <td>{{ date('d-m-Y',strtotime($item->DateOfBirth)) }}</td>

                                                <td>
                                                    <span class="badge badge-dim bg-{{ $item->DrivingLicenseExpiry < now() ? 'danger': ($item->DrivingLicenseExpiry > now()->addDays(7) ? 'success':'warning') }}">
                                                        {{ date('d-m-Y',strtotime($item->DrivingLicenseExpiry)) }}</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dim bg-{{ $item->PassportExpiry < now() ? 'danger': ($item->PassportExpiry > now()->addDays(7) ? 'success':'warning') }}">
                                                        {{ date('d-m-Y',strtotime($item->PassportExpiry)) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dim bg-{{ $item->BadgeExpiry < now() ? 'danger': ($item->BadgeExpiry > now()->addDays(7) ? 'success':'warning') }}">
                                                        {{ date('d-m-Y',strtotime($item->BadgeExpiry)) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dim bg-{{ $item->DBSExpiry < now() ? 'danger': ($item->DBSExpiry > now()->addDays(7) ? 'success':'warning') }}">
                                                        {{ date('d-m-Y',strtotime($item->DBSExpiry)) }}
                                                    </span>
                                                </td>
                                                <td> 
                                                    <span class="badge badge-dim bg-{{ $item->InsuranceExpiry < now() ? 'danger': ($item->InsuranceExpiry > now()->addDays(7) ? 'success':'warning') }}">
                                                        {{ date('d-m-Y',strtotime($item->InsuranceExpiry)) }}
                                                    </span>
                                                </td>
                                            </tr> @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection