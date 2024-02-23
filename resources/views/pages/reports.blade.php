@extends('pages.sidebar')
@section('content')
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                @if(session()->has('success'))
                <div class="alert alert-success mb-3">
                    {{ session()->get('success') }}
                </div>
                @elseif (session()->has('errors'))
                <div class="alert alert-danger mb-3">
                    {{ session()->get('errors') }}
                </div>
                @endif
            </div>
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <form action="{{url('generateReport')}}" class="form-validate is-alter">
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-06">Driver Name</label>
                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select class="form-control" name="DriverName" required>
                                                @php
                                                $drivername = DB::table('driver_details')->get();
                                                @endphp
                                                @foreach($drivername as $item)
                                                <option value="{{$item->DriverName}}">{{$item->DriverName}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="FromDate">From Date</label>
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="FromDate" name="FromDate" placeholder="Enter date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="ToDate">To Date</label>
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="ToDate" name="ToDate" placeholder="Enter date" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-lg btn-primary">Generate Report</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection