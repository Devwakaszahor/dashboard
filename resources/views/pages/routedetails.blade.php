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
      <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
          <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Route Detail Overview</h3>
            <div class="nk-block-des text-soft">
              <p>Welcome to Route Detail Overview</p>
            </div>
          </div><!-- .nk-block-head-content -->
          <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
              <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
              <div class="toggle-expand-content" data-content="pageMenu">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm"> <em class="icon ni ni-user-add"></em> &nbsp Add Route</button>
              </div>
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


<div class="modal fade" id="modalForm">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Route Info</h5>
        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
          <em class="icon ni ni-cross"></em>
        </a>
      </div>
      <div class="modal-body">
        <form action="{{url('AddNewRoute')}}" class="form-validate is-alter">
          <div class="form-group">
            <label class="form-label" for="RouteDate">Date</label>
            <div class="form-control-wrap">
              <input type="date" class="form-control" id="RouteDate" name="RouteDate" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="RouteNo">Route No</label>
            <div class="form-control-wrap">
              <input type="number" class="form-control" id="RouteNo" name="RouteNo" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="default-06">Driver Name</label>
            <div class="form-control-wrap ">
              <div class="form-control-select">
                <select class="form-control" name="DriverName">
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
          <div class="form-group">
            <label class="form-label" for="Cost1">Cost (£)</label>
            <div class="form-control-wrap">
              <input type="number" class="form-control" id="Cost1" name="Cost1">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="EscortName">Escort Name</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="EscortName" name="EscortName">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="Cost2">Cost (£)</label>
            <div class="form-control-wrap">
              <input type="number" class="form-control" id="Cost2" name="Cost2">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="default-06">Task</label>
            <div class="form-control-wrap ">
              <div class="form-control-select">
                <select class="form-control" name="Task">
                  <option value="Done">Done</option>
                  <option value="Working on It">Working on It</option>
                  <option value="Cancelled">Cancelled</option>
                  
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection