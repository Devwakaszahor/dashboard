@extends('pages.sidebar')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Driver Detail Overview</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to Driver Detail Overview</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->


                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <table class="datatable-init-export nowrap table" data-export-title="Export">
                                            <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>Driver Name</th>
                                                            <th>Escort Name</th>
                                                            <th>Fullname</th>
                                                            <th>Date Of Birth</th>
                                                            <th>License Expiry</th>
                                                            <th>Passport Expiry</th>
                                                            <th>Badge Expiry</th>
                                                            <th>DBS Expiry</th>
                                                            <th>Insurance Expiry</th>
                                                            
                                                        </tr>
                                            </thead>
                                                    <tbody>
                                                         @php 
                                            $drivername = DB::table('driver_details')->get();
                                            @endphp
                                            @foreach($drivername as $item)
                                                        <tr>
                                                            <td>{{$item->DriverID}}</td>
                                                            <td>{{$item->DriverName}}</td>
                                                            <td>{{$item->EscortName}}</td>
                                                            <td>{{$item->FullName}}</td>
                                                            <td>{{date('d-m-Y',strtotime($item->DateOfBirth))}}</td>
                                                            <td>{{date('d-m-Y',strtotime($item->DrivingLicenseExpiry))}}</td>
                                                            <td>{{date('d-m-Y',strtotime($item->PassportExpiry))}}</td>
                                                            <td>{{date('d-m-Y',strtotime($item->BadgeExpiry))}}</td>
                                                            <td>{{date('d-m-Y',strtotime($item->DBSExpiry))}}</td>
                                                            <td>{{date('d-m-Y',strtotime($item->InsuranceExpiry))}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Route Detail Overview</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to Route Detail Overview</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->


                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <table class="datatable-init-export nowrap table" data-export-title="Export">
                                            <thead>
                                                        <tr>
                                                            <th>Route ID</th>
                                                            <th>Route Date</th>
                                                            <th>Route No</th>
                                                            <th>Driver Name</th>
                                                            <th>Cost</th>
                                                            <th>Escort Name</th>
                                                            <th>Cost</th>
                                                            <th>Task</th>
                                                        </tr>
                                            </thead>
                                                    <tbody>
                                                         @php 
                                            $route_details = DB::table('route_details')->get();
                                            @endphp
                                            @foreach($route_details as $item)
                                                        <tr>
                                                            <td> {{$item->RouteID}}</td>
                                                            <td> {{$item->RouteDate}}</td>
                                                            <td> {{$item->RouteNo}}</td>
                                                            <td> {{$item->DriverName}}</td>
                                                            <td> {{$item->Cost1}}</td>
                                                            <td> {{$item->EscortName}}</td>
                                                            <td> {{$item->Cost2}}</td>
                                                            <td> {{$item->Task}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
