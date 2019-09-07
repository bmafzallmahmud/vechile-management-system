<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddVehicle;
use App\SeatAssign;
use App\Seat;


class SeatAllocationReportController extends Controller
{
    public function index()
    {
        //$data['master'] = AddVehicle::with('seats','seats.seat_assigns')->paginate();
//        return $data['master'];
        //$employee = SeatAssign::join('employee','employee.id','=','seat_assign.employee_id');
        $data['master'] = Seat::leftJoin('seat_assign', 'seats.id', '=', 'seat_assign.seat_id')
            ->leftJoin('add_vehicles', 'seats.vehicle_id', '=', 'add_vehicles.id')
            ->leftJoin('employee', 'employee.id', '=', 'seat_assign.employee_id')
            ->select('add_vehicles.registration_no', 'seat_number', 'employee_id', 'employee.name')
            ->orderBy('seats.id', 'asc')
            ->get();

        return view('pages.manage_seat-allocation-report', $data);
    }

}
