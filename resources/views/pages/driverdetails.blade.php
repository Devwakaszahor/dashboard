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
        @endif
      </div>
      <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
          <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Driver Detail Overview</h3>
            <div class="nk-block-des text-soft">
              <p>Welcome to Driver Detail Overview</p>
            </div>
          </div>
          <!-- .nk-block-head-content -->
          <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
              <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                <em class="icon ni ni-more-v"></em>
              </a>
              <div class="toggle-expand-content" data-content="pageMenu">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm">
                  <em class="icon ni ni-user-add"></em> &nbsp Add Driver </button>
              </div>
            </div>
          </div>
          <!-- .nk-block-head-content -->
        </div>
        <!-- .nk-block-between -->
      </div>
      <!-- .nk-block-head -->
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
            <tbody> @php $drivername = DB::table('driver_details')->get(); @endphp @foreach($drivername as $item) <tr>
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
              </tr> @endforeach </tbody>
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
        <h5 class="modal-title">Driver Detail</h5>
        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
          <em class="icon ni ni-cross"></em>
        </a>
      </div>
      <div class="modal-body">
        <form action="{{url('AddNewDriver')}}" class="form-validate is-alter">
          <div class="form-group">
            <label class="form-label" for="DriverName">Driver Name</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="DriverName" name="DriverName" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="EscortName">Escort Name</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="EscortName" name="EscortName" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="FullName">Full Name</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="FullName" name="FullName" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="DateOfBirth">Date Of Birth</label>
            <div class="form-control-wrap">
              <input type="Date" class="form-control" id="DateOfBirth" name="DateOfBirth" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="DrivingLicenseExpiry">Driving License Expiry</label>
            <div class="form-control-wrap">
              <input type="Date" class="form-control" id="DrivingLicenseExpiry" name="DrivingLicenseExpiry" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="PassportExpiry">Passport Expiry</label>
            <div class="form-control-wrap">
              <input type="Date" class="form-control" id="PassportExpiry" name="PassportExpiry" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="BadgeExpiry">Badge Expiry</label>
            <div class="form-control-wrap">
              <input type="Date" class="form-control" id="BadgeExpiry" name="BadgeExpiry" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="DBSExpiry">DBS Expiry</label>
            <div class="form-control-wrap">
              <input type="Date" class="form-control" id="DBSExpiry" name="DBSExpiry" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="InsuranceExpiry">Insurance Expiry</label>
            <div class="form-control-wrap">
              <input type="Date" class="form-control" id="InsuranceExpiry" name="InsuranceExpiry" required>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> @endsection