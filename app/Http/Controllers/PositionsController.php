<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Roles;
use App\Models\Positions;
use App\Models\EmployeesPositions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Employees::orderBy('id','DESC')->with(['positions', 'boss','rol'])->paginate(5);
        $roles = Roles::where('id','>',1)->get();
        $areas = Positions::all();
        $employees = Employees::all();
        return view('positions/index',compact('positions','roles','areas','employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employeesPosition = new EmployeesPositions;
        
        $employee = Employees::findOrFail($request->id_employee);
        $employee->id_rol = $request->id_rol;

        $employeesPosition->id_employee = $request->id_employee;
        $employeesPosition->id_position = $request->id_position;
        $employeesPosition->id_boss = $request->id_boss;

        $employeesPosition->save();
        $employee->save();

        return redirect()->route('positions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function show(Positions $positions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Positions $positions)
    {
        
    }

    public function deletePosition($id_employee, $id_position){
        $employee = EmployeesPositions::where([
            ['id_employee','=',$id_employee],
            ['id_position','=',$id_position],
        ])->delete();
        
        return redirect()->route('positions');
    }
}
