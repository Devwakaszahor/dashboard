<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function DriverDetail()
    {
        $title = "Driver Detail";
        return view('pages/driverdetails', compact('title'));
    }
    public function addDriverDetail(Request $request)
    {
        $data = array(
            'DriverName' => $request->DriverName,
            'EscortName' => $request->EscortName,
            'FullName' => $request->FullName,
            'DateOfBirth' => $request->DateOfBirth,
            'DrivingLicenseExpiry' => $request->DrivingLicenseExpiry,
            'PassportExpiry' => $request->PassportExpiry,
            'BadgeExpiry' => $request->BadgeExpiry,
            'DBSExpiry' => $request->DBSExpiry,
            'InsuranceExpiry' => $request->InsuranceExpiry
        );

        DB::table('driver_details')->insert($data);
        return redirect()->back()->with("success", "Data added successfully!");
    }

    public function RouteDetail()
    {
        $title = "Route Details";
        return view('pages/routedetails', compact('title'));
    }

    public function addRouteDetail(Request $request)
    {
        $data = array(
            'RouteDate' => $request->RouteDate,
            'RouteNo' => $request->RouteNo,
            'DriverName' => $request->DriverName,
            'Cost1' => $request->Cost1,
            'EscortName' => $request->EscortName,
            'Cost2' => $request->Cost2,
            'Task' => $request->Task,
        );

        DB::table('route_details')->insert($data);
        return redirect()->back()->with("success", "Data added successfully!");
    }

    public function userProfile()
    {

        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password|min:8',
        ]);

        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back()->with("success", "Password changed successfully!");
    }

    public function GetExpiry()
    {
        $getExpiry = DB::table('driver_details')->get();
        return view('pages.viewExpiry', compact('getExpiry'));
    }

    public function reports()
    {
        $title = "Reports";
        return view('pages.reports', compact('title'));
    }
    public function generateReport(Request $request)
    {
        $this->validate($request, [
            'DriverName' => 'required',
            'FromDate' => 'required',
            'ToDate' => 'required',
        ]);

        $fromDate = $request->FromDate;
        $toDate = $request->ToDate;
        $DriverName = $request->DriverName;

        $generateReport = DB::table('route_details')->select('*')->where('DriverName', '=', $DriverName)
            ->whereBetween('RouteDate', [$fromDate, $toDate])->get();
        return view('pages.generatereports', compact('fromDate', 'toDate','DriverName', 'generateReport'));
    }
}
