<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $staffs = Staff::select('*');
        $search = $request->search;


        if ($search) {
            $staffs = $staffs->where('name', 'like', '%' . $search . '%')->orwhere('id', $search);
        }
        $staffs = $staffs->paginate(5);

        return view('staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request)
    {
        $staff = new Staff();
        $staff->staffGroup = $request->staffGroup;
        $staff->name = $request->name;
        $staff->birthday = $request->birthday;
        $staff->gender = $request->gender;
        $staff->CMND = $request->CMND;
        $staff->phone = $request->phone;
        $staff->email = $request->email;
        $staff->address = $request->address;

        $staff->save();
        return redirect()->route('staffs.index')->with('success', 'Thêm' . ' ' . $request->name . ' ' .  'thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = staff::find($id);
        $staffGroups = staff::all();
        $params = [
            'staff' => $staff,
            'staffGroups' => $staffGroups,
        ];
        return view('staffs.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffRequest  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, $id)
    {
        $staff = Staff::find($id);
        $staff->staffGroup = $request->staffGroup;
        $staff->name = $request->name;
        $staff->birthday = $request->birthday;
        $staff->gender = $request->gender;
        $staff->CMND = $request->CMND;
        $staff->phone = $request->phone;
        $staff->email = $request->email;
        $staff->address = $request->address;

        $staff->save();
        return redirect()->route('staffs.index')->with('success', 'Sửa' . ' ' . $request->name . ' ' .  'thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::find($id)->delete();

        return redirect()->route('staffs.index')->with('success', 'Xóa thành công');
    }
}
