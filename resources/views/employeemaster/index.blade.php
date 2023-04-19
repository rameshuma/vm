@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employee Master')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="col-md-12 mx-auto">
            {{-- <div class="container-fluid">
                <div class="col-md-6 mx-auto">
                    @include('layouts.alert')
                </div> --}}
            </div>
            <div class="row">
                <div class="container-fluid">
                    <div class="card shadow">
                      <div class="card-header">
                        <div class="d-flex justify-content-between">
                          <h4 class="font-weight-bold text-dark py">EMPLOYEE MASTER</h4>
                          <div style="width:120px">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal1">Add</button>
                          </div>
                        </div>
                      </div>
            </div>
{{--------employee Add------------}}

            <div id="myModal1" class="modal fade" role="dialog">
                <div class="modal-dialog modal-xl">
            <div class="modal-content ">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-center">Employee Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">personal Details</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Visa info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">Insurance Details</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab">Salary info</a>
                          </li>
                          <li class="nav-item ml-auto">
                            <button class="btn btn-primary" id="prev-tab">Previous</button>
                            <button class="btn btn-primary" id="next-tab">Next</button>
                          </li>
                      </ul>

                      <div class="tab-content">
                        <div class="tab-pane active" id="tab1" role="tabpanel">
                          <div class="card-body ">
                            @include('employeemaster.form')
                        </div>
                    </div>
                  </div>

                    </div>

                  </div>
                </div>
              </div>

{{--employee edit--}}
{{-- <div class="container-fluid">
    <div class="col-md-6 mx-auto">
        @include('layouts.alert')
    </div> --}}

          @foreach ($employes as $employe)
     <div class="modal fade" id="edit_employee_{{ $employe->id }}">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    <h4 class="modal-title" align="center"><b>Edit Employee</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>

                  </div>
                  <div class="modal-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tab5{{ $employe->id }}" role="tab">personal Details</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tab6{{ $employe->id }}" role="tab">Visa info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab7{{ $employe->id }}" role="tab">Insurance Details</a>
                          </li>
                          <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab8{{ $employe->id }}" role="tab">Salary info</a>
                          </li>
                          <li class="nav-item ml-auto">
                            <button class="btn btn-primary" id="prev-tab1">Previous</button>
                            <button class="btn btn-primary" id="next-tab1">Next</button>
                          </li>
                      </ul>

                      <div class="tab-content">
                        <div class="tab-pane active" id="tab5{{ $employe->id }}" role="tabpanel">
                    <div class="card-body">
                        <form method="POST" class="form-row" action="{{ route('employeemaster.update',$employe->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group col-md-6">
                                <label for="firstname" class="form-label fw-bold">FirstName</label>
                                <input type="text" name="firstname" value="{{old("firstname",$employe->firstname)}}" placeholder="Employee FirstName" class="form-control">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="fullname" class="form-label fw-bold">Last Name<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" name="lastname" value="{{old("lastname",$employe->lastname)}}" placeholder="Last Name" class="form-control" pattern="[A-Za-z]{1,32}">
                                @error('lastname')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>

                            <div class="form-group col-md-6 ">
                                <label for="fullname" class="form-label fw-bold">Father Name<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" name="fathername" value="{{old("fathername",$employe->fathername)}}" placeholder="Father Name" class="form-control">
                                @error('fathername')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-6 ">
                                <label for="fullname" class="form-label fw-bold">Mother Name<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" name="mothername" value="{{old("mothername",$employe->mothername)}}" placeholder="Mother Name" class="form-control">
                                @error('mothername')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-6">
                                <label class="form-label fw-bold" for="join_date">Date of Joining<a style="text-decoration: none;color:red">*</a></label>
                                <input type="date" class="form-control" value="{{old("join_date",$employe->join_date)}}"  placeholder="Date of Joining" name="join_date" id="join_date" >
                                @error('join_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="end_date">End Date</label>
                                <input type="date" class="form-control" value="{{old("end_date",$employe->end_date)}}"  placeholder="End Date" name="end_date" id="join_date" >
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="category">Category<a style="text-decoration: none;color:red">*</a></label>
                                <div class="form-label">
                                    <select id="category" name="category"  class="form-control" type="text" placeholder="Category">
                                        @foreach(trans('category') as $value => $label)
                                        <option @if(($employe->category ?? old('category')) == $value) selected @endif value="{{ $value }}">{{$label}}</option>
                                       @endforeach
                                   </select>
                                </div>
                                @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="sponser">Sponsor<a style="text-decoration: none;color:red">*</a></label>
                                <select id="sponser" name="sponser"  class="form-control" type="text" placeholder="Sponsor">
                                    @foreach(trans('sponsor') as $value => $label)
                                    <option @if(($employe->sponser ?? old('sponser')) == $value) selected @endif value="{{ $value }}">{{$label}}</option>
                                   @endforeach
                               </select>
                                @error('sponser')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="working_as">Working As<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" name="working_as" value="{{old("working_as",$employe->working_as)}}"  placeholder="working As" class="form-control">
                                @error('working_as')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="desigination">Visa Designation<a style="text-decoration: none;color:red">*</a></label>
                             <div class="form-label">
                                <select id="desigination" name="desigination"  class="form-control" type="text" placeholder="Designation">
                                    @foreach(trans('designation') as $value => $label)
                                    <option @if(($employe->desigination ?? old('desigination')) == $value) selected @endif value="{{ $value }}">{{$label}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('designation')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="depart">Department<a style="text-decoration: none;color:red">*</a></label>
                             <div class="form-label">
                                <select id="depart" name="depart"  class="form-control" type="text" placeholder="Department">
                                    @foreach(trans('department') as $value => $label)
                                    <option @if(($employe->depart ?? old('depart')) == $value) selected @endif value="{{ $value }}">{{$label}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('department')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="status">Status<a style="text-decoration: none;color:red">*</a></label>
                             <div class="form-label">
                                <select id="status" name="status"  class="form-control" type="text" placeholder="Department">
                                    @foreach(trans('status') as $value => $label)
                                    <option @if(($employe->status ?? old('status')) == $value) selected @endif value="{{ $value }}">{{$label}}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="religion">Religion<a style="text-decoration: none;color:red">*</a></label>
                                <div class="form-label">
                                    <select id="religion" name="religion"  class="form-control" type="text" placeholder="Religion">
                                        @foreach(trans('religion') as $value => $label)
                                        <option @if(($employe->religion ?? old('religion')) == $value) selected @endif value="{{ $value }}">{{$label}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    @error('religion')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="nationality">Nationality<a style="text-decoration: none;color:red">*</a></label>
                                <div class="form-label">
                                <select id="nationality" name="nationality"  class="form-control" type="text" placeholder="Religion">
                                    @foreach(trans('nationality') as $value => $label)
                                    <option @if(old('nationality') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('nationality')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>


                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="city">Current Location<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" class="form-control" value="{{old("city",$employe->city)}}"  placeholder="City" name="city">
                                @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>

                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="phone">Home Country Contact Number<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" class="form-control" value="{{old("phone",$employe->phone)}}"  placeholder="Phone" name="phone" pattern="[0-9]{10}" maxlength="10" >
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="UAE_mobile_number">UAE Mobile Number<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" class="form-control" value="{{old("UAE_mobile_number",$employe->UAE_mobile_number)}}"  placeholder="UAE Mobile Number" name="UAE_mobile_number" pattern="[0-9]{10}" maxlength="10" >
                                @error('UAE_mobile_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>

                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="pay_group">Pay Group<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" class="form-control" value="{{old("pay_group",$employe->pay_group)}}"  placeholder="PayGroup" name="pay_group">
                                @error('pay_group')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="accomodation">Accomodation<a style="text-decoration: none;color:red">*</a></label>
                                <input type="text" class="form-control" value="{{old("accomodation",$employe->accomodation)}}"  placeholder="Accomodation" name="accomodation">
                                @error('accomodation')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>

                               <div class="form-group col-md-4">
                                <label for="passport_no" class="form-label fw-bold">Passport Number<a style="text-decoration: none;color:red">*</a></label>
                                <input type="passport_no" name="passport_no" value="{{old("passport_no",$employe->passport_no)}}" placeholder="Passport Number" class="form-control"  >
                                @error('passport_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="passport_expiry_date"> Passport Expiry Date<a style="text-decoration: none;color:red">*</a></label>
                                <input type="date" class="form-control" value="{{old("passport_expiry_date",$employe->passport_expiry_date)}}"  placeholder="Passport Expiry Date" name="passport_expiry_date" id="passport_expiry_date" >
                                @error('passport_expiry_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label for="emirates_id_no" class="form-label fw-bold">Emirates Id No<a style="text-decoration: none;color:red">*</a></label>
                                <input type="emirates_id_no" name="emirates_id_no" value="{{old("emirates_id_no",$employe->emirates_id_no)}}"  placeholder="Emirates Id No" class="form-control" maxlength="7">
                                @error('emirates_id_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="emirates_id_from_date">Emirates Id From Date<a style="text-decoration: none;color:red">*</a></label>
                                <input type="date" class="form-control" value="{{old("emirates_id_from_date",$employe->emirates_id_from_date)}}"  placeholder="Emirates Id From Date" name="emirates_id_from_date" id="emirates_id_from_date" >
                                @error('emirates_id_from_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            <div class="form-group col-md-4">
                                <label class="form-label fw-bold" for="emirates_id_to_date">Emirates Id To Date<a style="text-decoration: none;color:red">*</a></label>
                                <input type="date" class="form-control" value="{{old("emirates_id_to_date",$employe->emirates_id_to_date)}}"  placeholder="Emirates Id To Date" name="emirates_id_to_date" id="emirates_id_to_date" >
                                @error('emirates_id_to_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>


                    </div>
                  </div>

      {{------Visa Details tab------}}

          <div class="tab-pane" id="tab6{{ $employe->id }}" role="tabpanel">
            <div class="card-body ">


                          <div class="form-group col-md-6">
                              <label class="form-label fw-bold" for="expiry_date">Visa End Date<a style="text-decoration: none;color:red">*</a></label>
                              <input type="date" class="form-control" value="{{old("expiry_date",$employe->expiry_date)}}"  placeholder="Visa End Date" name="expiry_date" id="expiry_date" required>
                          </div>

                            <div class="form-group col-md-6">
                                <label class="form-label fw-bold" for="visa_status">Visa Status<a style="text-decoration: none;color:red">*</a></label>
                                <div class="form-label">
                                    <select id="visa_status" name="visa_status"  class="form-control" type="text" placeholder="Category">
                                        @foreach(trans('category') as $value => $label)
                                        <option @if(old('category') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                    </div>
          </div>

      {{------Medical Insurance tab------}}

          <div class="tab-pane" id="tab7{{ $employe->id }}" role="tabpanel">
              <div class="card-body ">

                              <div class="form-group col-md-6">
                                <label class="form-label fw-bold" for="coverage_from_date">Insurance Coverage From Date<a style="text-decoration: none;color:red">*</a></label>
                                <input type="date" class="form-control" value="{{old("coverage_from_date",$employe->coverage_from_date)}}"  placeholder="Visa Entry Date" name="coverage_from_date" id="coverage_from_date" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label fw-bold" for="coverage_to_date">Insurance Coverage To Date<a style="text-decoration: none;color:red">*</a></label>
                                <input type="date" class="form-control" value="{{old("coverage_to_date",$employe->coverage_to_date)}}"  placeholder="Visa End Date" name="coverage_to_date" id="coverage_to_date" required>
                            </div>


                      </div>
            </div>

      {{------Salary Details tab------}}

            <div class="tab-pane" id="tab8{{ $employe->id }}" role="tabpanel">
              <div class="card-body ">


                              <div class="form-group col-md-6">
                                  <label for="fullname" class="form-label fw-bold">Total Salary<a style="text-decoration: none;color:red">*</a></label>
                                  <input type="text" name="total_salary" value="{{old("total_salary",$employe->total_salary)}}" placeholder="Total Salary" class="form-control" required>
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="fullname" class="form-label fw-bold">HRA<a style="text-decoration: none;color:red">*</a></label>
                                  <input type="text" name="hra" value="{{old("hra",$employe->hra)}}" placeholder="HRA" class="form-control" required>
                              </div>

                              {{-- <div class="form-group col ">
                                  <label for="fullname" class="form-label fw-bold">Overtime Status<a style="text-decoration: none;color:red">*</a></label>
                                  <input type="checkbox" name="overtime_status" value="{{old("overtime_status")}}" placeholder="Overtime Status" class="form-control" required>
                              </div> --}}




                        <div class="form-group row ">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary ">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                        </div>
            </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    @endforeach



{{--employee view--}}

@foreach ($employes as $employe)
   <div class="modal fade" id="view_employee_{{ $employe->id }}" tabindex="-1" role="dialog" aria-labelledby="view_employee_{{ $employe->id }}_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title " id="view_employee_{{ $employe->id }}_label">View Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tab9{{ $employe->id }}" role="tab">personal Details</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tab10{{ $employe->id }}" role="tab">Visa info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab11{{ $employe->id }}" role="tab">Insurance Details</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab12{{ $employe->id }}" role="tab">Salary info</a>
                          </li>
                          <li class="nav-item ml-auto">
                            <button class="btn btn-primary" id="prev-tab1">Previous</button>
                            <button class="btn btn-primary" id="next-tab1">Next</button>
                          </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab9{{ $employe->id }}" role="tabpanel">
                <table class="table table-bordered table-striped" >
                    <h3 class="text-primary font-weight-bold text-center">
                        Profile: {{$employe->firstname}}
                    </h3>
                    <tr>
                        <th>Employee ID</th>
                        <td>{{ "EMP00" . $employe->id }}</td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td>{{ $employe->firstname }}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $employe->lastname }}</td>
                    </tr>

                    <tr>
                        <th>Father Name</th>
                        <td>{{ $employe->fathername }}</td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td>{{ $employe->mothername }}</td>
                    </tr>
                    <tr>
                        <th>Date of Joining</th>
                        <td>{{ $employe->join_date }}</td>
                    </tr>
                    <tr>
                        <th>End Date</th>
                        <td>{{ $employe->end_date }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $employe->category }}</td>
                    </tr>
                    <tr>
                        <th>Sponsor</th>
                        <td>{{ $employe->sponser }}</td>
                    </tr>
                    <tr>
                        <th>Working As</th>
                        <td>{{ $employe->working_as }}</td>
                    </tr>
                    <tr>
                        <th>Visa Designation</th>
                        <td>{{ $employe->desigination }}</td>
                    </tr>
                    <tr>
                        <th>Department</th>
                        <td>{{ $employe->depart }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $employe->status }}</td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td>{{ $employe->religion }}</td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td>{{ $employe->nationality }}</td>
                    </tr>


                    <tr>
                        <th>Location</th>
                        <td>{{ $employe->city }}</td>
                    </tr>
                    <tr>
                        <th>Home Country Contact Number</th>
                        <td>{{ $employe->phone }}</td>
                    </tr>
                    <tr>
                        <th>UAE Mobile Number</th>
                        <td>{{ $employe->UAE_mobile_number }}</td>
                    </tr>

                    <tr>
                        <th>Pay Group</th>
                        <td>{{ $employe->pay_group }}</td>
                    </tr>
                    <tr>
                        <th>Accomodation</th>
                        <td>{{ $employe->accomodation }}</td>
                    </tr>

                    <tr>
                        <th>Passport Number</th>
                        <td>{{ $employe->passport_no }}</td>
                    </tr>
                    <tr>
                        <th>Passport Expiry Date</th>
                        <td>{{ $employe->passport_expiry_date }}</td>
                    </tr>
                    <tr>
                        <th>Emirates Id No</th>
                        <td>{{ $employe->emirates_id_no }}</td>
                    </tr>
                    <tr>
                        <th>Emirates Id From Date</th>
                        <td>{{ $employe->emirates_id_from_date }}</td>
                    </tr>
                    <tr>
                        <th>Emirates Id To Date</th>
                        <td>{{ $employe->emirates_id_to_date }}</td>
                    </tr>
                </table>
            </div>
            <div class="tab-pane" id="tab10{{ $employe->id }}" role="tabpanel">
                <table class="table table-bordered table-striped" >


                    <tr>
                        <th>Visa End Date</th>
                        <td>{{ $employe->expiry_date }}</td>
                    </tr>
                    <tr>
                        <th>Visa Status</th>
                        <td>{{ $employe->category }}</td>
                    </tr>

                </table>
               </div>
               <div class="tab-pane" id="tab11{{ $employe->id }}" role="tabpanel">
                <table class="table table-bordered table-striped" >


                    <tr>
                        <th>Insurance Coverage From Date</th>
                        <td>{{ $employe->coverage_from_date }}</td>
                    </tr>
                    <tr>
                        <th>Insurance Coverage To Date</th>
                        <td>{{ $employe->coverage_to_date }}</td>
                    </tr>
                </table>
            </div>
            <div class="tab-pane" id="tab12{{ $employe->id }}" role="tabpanel">
                <table class="table table-bordered table-striped" >

                    <tr>
                        <th>Total Salary</th>
                        <td>{{ $employe->total_salary }}</td>
                    </tr>
                    <tr>
                        <th>HRA</th>
                        <td>{{ $employe->hra }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
   </div>
    </div>
   </div>

@endforeach

{{--employee index--}}

            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Employee Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Department</th>
                                <th>Date of Joining</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employes as $key => $employe)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{"EMP00".$employe->id}}</td>
                                    <td>{{$employe->firstname}}</td>
                                    <td>{{$employe->lastname}}</td>
                                    <td>{{$employe->depart}}</td>
                                    <td>{{$employe->join_date}}</td>
                                    <td>
                                        <a href="{{route("employeemaster.show",$employe->id)}}"
                                            class="btn btn-primary btn-circle btn-sm"  data-toggle="modal" data-target="#view_employee_{{$employe->id}}" >
                                            <i class="fas fa-flag"></i>
                                        </a>

                                    </td>

                                       <td> <a href="{{route("employeemaster.edit",$employe->id)}}"
                                            class="btn btn-info btn-circle btn-sm mx-2" data-toggle="modal" data-target="#edit_employee_{{ $employe->id }}" >
                                            <i class="fas fa-check"></i>
                                        </a></td>
                                       <td> <form id="{{$employe->id}}" action="{{route("employeemaster.destroy",$employe->id)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                        <button onclick="deleteAd({{$employe->id}})"
                                            type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                 </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
{{--Datatable search bar and export button code here--}}

    <script>
         $("#myTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [
        {
            extend: 'collection',
            text: '<i class="fa fa-file-export" aria-hidden="true"></i>',
            buttons: ['csv','excel','pdf',]
        },
        {
            extend: 'collection',
            text: '<i class="fa fa-print" aria-hidden="true"></i>',
            buttons: 'print',
        },



    ]
    }).buttons().container().appendTo('#myTable_wrapper .col-md-6:eq(0)');
    $('#myTable1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });


 </script>


 {{--Delete Button Sweet Alert Code here--}}

    @if(session()->has("success"))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif
    <script>
        function deleteAd(id){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your data was not deleted..',
                        'error'
                    )
                }
                })
        }
    </script>

{{--Date of joining validation code here--}}


<script>
    $(function() {
      // add click handler for previous button
      $('#prev-tab').on('click', function() {
        var activeTab = $('.tab-pane.active');
        var prevTab = activeTab.prev('.tab-pane');

        if (prevTab.length > 0) {
          activeTab.removeClass('active show');
          prevTab.addClass('active show');
          var prevTabId = '#' + prevTab.attr('id');
          $('a[href="' + prevTabId + '"]').tab('show');
          $('a.nav-link.active').removeClass('active');
          $('a[href="' + prevTabId + '"]').addClass('active');
        }
      });

      // add click handler for next button
      $('#next-tab').on('click', function() {
        var activeTab = $('.tab-pane.active');
        var nextTab = activeTab.next('.tab-pane');

        if (nextTab.length > 0) {
          activeTab.removeClass('active show');
          nextTab.addClass('active show');
          var nextTabId = '#' + nextTab.attr('id');
          $('a[href="' + nextTabId + '"]').tab('show');
          $('a.nav-link.active').removeClass('active');
          $('a[href="' + nextTabId + '"]').addClass('active');
        }
      });
    });
  </script>
  <script>
    $(function() {
      // add click handler for previous button
      $('#prev-tab1').on('click', function() {
        var activeTab = $('.tab-pane.active');
        var prevTab = activeTab.prev('.tab-pane');

        if (prevTab.length > 0) {
          activeTab.removeClass('active show');
          prevTab.addClass('active show');
          var prevTabId = '#' + prevTab.attr('id');
          $('a[href="' + prevTabId + '"]').tab('show');
          $('a.nav-link.active').removeClass('active');
          $('a[href="' + prevTabId + '"]').addClass('active');
        }
      });

      // add click handler for next button
      $('#next-tab1').on('click', function() {
        var activeTab = $('.tab-pane.active');
        var nextTab = activeTab.next('.tab-pane');

        if (nextTab.length > 0) {
          activeTab.removeClass('active show');
          nextTab.addClass('active show');
          var nextTabId = '#' + nextTab.attr('id');
          $('a[href="' + nextTabId + '"]').tab('show');
          $('a.nav-link.active').removeClass('active');
          $('a[href="' + nextTabId + '"]').addClass('active');
        }
      });
    });
  </script>


@stop
