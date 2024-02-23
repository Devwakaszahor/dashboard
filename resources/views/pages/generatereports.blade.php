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
            <h3 class="nk-block-title page-title">Driver Report</h3>
            <div class="nk-block-des text-soft">
              <p>{{$fromDate}} - {{ $toDate }} </p>
              <strong>Driver Name : {{$DriverName}}</strong>
            </div>
          </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
      </div><!-- .nk-block-head -->

      <div class="card card-bordered card-preview">
        <div class="card-inner">
          <table class="datatable-init-export nowrap table" data-export-title="Export">
            <thead>
              <tr>
                <th>Sr. No</th>
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

              @foreach($generateReport as $key => $item)
              <tr>
                <td> {{++$key}}</td>
                <td> {{$item->RouteID}}</td>
                <td> {{$item->RouteDate}}</td>
                <td> {{$item->RouteNo}}</td>
                <td> {{$item->DriverName}}</td>
                <td> {{$item->Cost1}}</td>
                <td> {{$item->EscortName}}</td>
                <td> {{$item->Cost2}}</td>
                
                <td class="text-white text-center font-weight-700 bg-{{ $item->Task == 'Cancelled'  ? 'danger': ($item->Task == 'Done' ? 'success':'warning') }}">
                   {{$item->Task}}</td>
              </tr>
              @endforeach
            </tbody>
            
            <tfoot>
              <t>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  @php
                  $costsum = DB::table('route_details')->select(DB::raw('SUM(Cost1) as DriverCost'), DB::raw('SUM(Cost2) as EscortCost'))
                  ->where('DriverName','=',$DriverName)->whereBetween('RouteDate',[$fromDate,$toDate])->get();
                  @endphp
                  <span class="amount text-center" style="font-weight: bolder;font-size: 18px;">
                    £{{ $costsum[0]->DriverCost }}.0
                  </span>
                </td>
                <td></td>
                <td>
                  <span class="amount text-center" style="font-weight: bolder;font-size: 18px;">
                    £{{ $costsum[0]->EscortCost }}.0
                  </span>

                </td>
                <td></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection