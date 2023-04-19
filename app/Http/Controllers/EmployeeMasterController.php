<?php

namespace App\Http\Controllers;
use App\Models\EmployeeMaster;
use App\Models\VisaDetails;
use App\Models\SalaryDetails;
use App\Models\InsuranceDetails;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class EmployeeMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $employes = EmployeeMaster::all();
        $employe = DB::table('employee_masters')
            ->join('insurance_details', 'employee_masters.id', '=', 'insurance_details.sno')
            ->leftJoin('salary_details', 'insurance_details.sno', '=', 'salary_details.sno')
            ->join('visa_details', 'salary_details.sno', '=', 'visa_details.sno')
            ->select('employee_masters.*', 'insurance_details.*', 'salary_details.*', 'visa_details.*')
            ->get();
            info($employe);

        return view('employeemaster.index')->with([
            'employes' => $employe
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeemaster.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        info($request);
        $this->validate($request, [
            'id'=> '|unique:employes',
            'employee_no' => '',
            'firstname' => 'required',
            'lastname' => 'required',
            'fathername' => 'required',
            'mothername' => 'required',
            'join_date' => 'required',
            'end_date' => 'required',
            'category' => 'required',
            'sponser' => 'required',
            'working_as' => 'required',
            'desigination' => 'required',
            'depart' => 'required',
            'status' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
            'UAE_mobile_number' => 'required|numeric',
            'pay_group' => 'required',
            'accomodation' => 'required',
            'passport_no' => 'required',
            'passport_expiry_date' => '',
            'emirates_id_no' => 'required',
            'emirates_id_from_date' => 'required',
            'emirates_id_to_date' => 'required',
            'visa_status'=>'required',
            'expiry_date'=>'required',
            'coverage_from_date'=>'required',
            'coverage_to_date'=>'required',
            'total_salary'=>'required',
            'hra'=>'required',

            //'overtime_status'=>'required',



        ]);
        // $data1 = $request->except(['_token']);
        $employeemaster = $request->only(["employee_no","firstname","lastname","fathername","mothername",
        "join_date","end_date","category","sponser","working_as","desigination","depart",
        "status","religion","nationality","city","phone","UAE_mobile_number","pay_group",
        "accomodation","passport_no","passport_expiry_date","emirates_id_no","emirates_id_from_date","emirates_id_to_date"]);
        $salarydetails= $request->only(["employee_no","total_salary","hra"]);
        $visadetails=$request->only(["employee_no","visa_status","expiry_date"]);
        $insurancedetails=$request->only(["employee_no","coverage_from_date","coverage_to_date"]);
        SalaryDetails::create($salarydetails);
        EmployeeMaster::create($employeemaster);
        VisaDetails::create($visadetails);
        InsuranceDetails::create($insurancedetails);



        return redirect()->route('employeemaster.index')->with([
            "success" => "Employee added successfully"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe = EmployeeMaster::where('id', $id);
        return view("employeemaster.show")->with([
            "employes" => $employe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
{
    $this->validate($request, [
        'id'=> '|unique:employes,id,'.$id,
        'employee_no' => '',
        'firstname' => 'required',
        'lastname' => 'required',
        'fathername' => 'required',
        'mothername' => 'required',
        'join_date' => 'required',
        'end_date' => 'required',
        'category' => 'required',
        'sponser' => 'required',
        'working_as' => 'required',
        'desigination' => 'required',
        'depart' => 'required',
        'status' => 'required',
        'religion' => 'required',
        'nationality' => 'required',
        'city' => 'required',
        'phone' => 'required|numeric',
        'UAE_mobile_number' => 'required|numeric',
        'pay_group' => 'required',
        'accomodation' => 'required',
        'passport_no' => 'required',
        'passport_expiry_date' => '',
        'emirates_id_no' => 'required',
        'emirates_id_from_date' => 'required',
        'emirates_id_to_date' => 'required',
        'visa_status'=>'required',
        'expiry_date'=>'required',
        'coverage_from_date'=>'required',
        'coverage_to_date'=>'required',
        'total_salary'=>'required',
        'hra'=>'required',
        //'overtime_status'=>'required',
    ]);

    $data1 = $request->except(['_token', '_method']);
    SalaryDetails::where('sno', $id)->update($data1);
    EmployeeMaster::where('id', $id)->update($data1);
    VisaDetails::where('sno', $id)->update($data1);
    InsuranceDetails::where('sno', $id)->update($data1);

    return redirect()->route('employeemaster.index')->with([
        "success" => "Employee updated successfully"
    ]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        info($request);
        $employee = EmployeeMaster::findOrFail($id);

        $this->validate($request, [
            'id'=> '|unique:employes,id,'.$employee->id,
            'employee_no' => '',
            'firstname' => 'required',
            'lastname' => 'required',
            'fathername' => 'required',
            'mothername' => 'required',
            'join_date' => 'required',
            'end_date' => 'required',
            'category' => 'required',
            'sponser' => 'required',
            'working_as' => 'required',
            'desigination' => 'required',
            'depart' => 'required',
            'status' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
            'UAE_mobile_number' => 'required|numeric',
            'pay_group' => 'required',
            'accomodation' => 'required',
            'passport_no' => 'required',
            'passport_expiry_date' => '',
            'emirates_id_no' => 'required',
            'emirates_id_from_date' => 'required',
            'emirates_id_to_date' => 'required',
            'visa_status'=>'required',
            'expiry_date'=>'required',
            'coverage_from_date'=>'required',
            'coverage_to_date'=>'required',
            'total_salary'=>'required',
            'hra'=>'required',
            //'overtime_status'=>'required',
        ]);

        $employeemaster = $request->only(["employee_no","firstname","lastname","fathername","mothername",
        "join_date","end_date","category","sponser","working_as","desigination","depart",
        "status","religion","nationality","city","phone","UAE_mobile_number","pay_group",
        "accomodation","passport_no","passport_expiry_date","emirates_id_no","emirates_id_from_date","emirates_id_to_date"]);
        $salarydetails= $request->only(["employee_no","total_salary","hra"]);
        $visadetails=$request->only(["employee_no","visa_status","expiry_date"]);
        $insurancedetails=$request->only(["employee_no","coverage_from_date","coverage_to_date"]);
        $employee->update($employeemaster);
         $employee->salaryDetails()->update($salarydetails);
         $employee->visaDetails()->update($visadetails);
         $employee->insuranceDetails()->update($insurancedetails);

        return redirect()->route('employeemaster.index')->with([
            "success" => "Employee updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        EmployeeMaster::where('id', $id)->delete();
        VisaDetails::where('sno', $id)->delete();
        InsuranceDetails::where('sno', $id)->delete();
        SalaryDetails::where('sno', $id)->delete();


        return redirect()->route("employeemaster.index")->with([
            "success" => "Employee deleted successfully"
        ]);
    }
}
