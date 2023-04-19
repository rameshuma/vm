<form method="POST" class="form-group row" action="{{ route('employeemaster.store') }}" enctype="multipart/form-data">
    @csrf


                      <div class="form-group col-md-6">
                          <label for="fullname" class="form-label fw-bold">First Name<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" name="firstname" value="{{old("firstname")}}"
placeholder="First Name" class="form-control" pattern="[A-Za-z]{1,32}" maxlength="32">
                          @error('firstname')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-6">
                          <label for="fullname" class="form-label fw-bold">Last Name<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" name="lastname" value="{{old("lastname")}}" placeholder="Last Name" class="form-control" pattern="[A-Za-z]{1,32}">
                          @error('lastname')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>

                      <div class="form-group col-md-6 ">
                          <label for="fullname" class="form-label fw-bold">Father Name<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" name="fathername" value="{{old("fathername")}}" placeholder="Father Name" class="form-control">
                          @error('fathername')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-6 ">
                          <label for="fullname" class="form-label fw-bold">Mother Name<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" name="mothername" value="{{old("mothername")}}" placeholder="Mother Name" class="form-control">
                          @error('mothername')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-6">
                          <label class="form-label fw-bold" for="join_date">Date of Joining<a style="text-decoration: none;color:red">*</a></label>
                          <input type="date" class="form-control" value="{{old("join_date")}}"  placeholder="Date of Joining" name="join_date" id="join_date" >
                          @error('join_date')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-6">
                          <label class="form-label fw-bold" for="end_date">End Date</label>
                          <input type="date" class="form-control" value="{{old("end_date")}}"  placeholder="End Date" name="end_date" id="join_date" >
                        </div>
                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="category">Category<a style="text-decoration: none;color:red">*</a></label>
                          <div class="form-label">
                              <select id="category" name="category"  class="form-control" type="text" placeholder="Category">
                                  @foreach(trans('category') as $value => $label)
                                  <option @if(old('category') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
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
                            <option @if(old('sponser') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </select>
                          @error('sponser')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="working_as">Working As<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" name="working_as" value="{{old("working_as")}}"  placeholder="working As" class="form-control">
                          @error('working_as')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="desigination">Visa Designation<a style="text-decoration: none;color:red">*</a></label>
                       <div class="form-label">
                          <select id="desigination" name="desigination"  class="form-control" type="text" placeholder="Designation">
                              @foreach(trans('designation') as $value => $label)
                              <option @if(old('designation') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
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
                              <option @if(old('department') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
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
                              <option @if(old('status') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
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
                                  <option @if(old('religion') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
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
                          <input type="text" class="form-control" value="{{old("city")}}"  placeholder="City" name="city">
                          @error('city')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>

                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="phone">Home Country Contact Number<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" class="form-control" value="{{old("phone")}}"  placeholder="Phone" name="phone" pattern="[0-9]{10}" maxlength="10" >
                          @error('phone')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="UAE_mobile_number">UAE Mobile Number<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" class="form-control" value="{{old("UAE_mobile_number")}}"  placeholder="UAE Mobile Number" name="UAE_mobile_number" pattern="[0-9]{10}" maxlength="10" >
                          @error('UAE_mobile_number')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>

                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="pay_group">Pay Group<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" class="form-control" value="{{old("pay_group")}}"  placeholder="PayGroup" name="pay_group">
                          @error('pay_group')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="accomodation">Accomodation<a style="text-decoration: none;color:red">*</a></label>
                          <input type="text" class="form-control" value="{{old("accomodation")}}"  placeholder="Accomodation" name="accomodation">
                          @error('accomodation')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                         <div class="form-group col-md-4">
                          <label for="passport_no" class="form-label fw-bold">Passport Number<a style="text-decoration: none;color:red">*</a></label>
                          <input type="passport_no" name="passport_no" value="{{old("passport_no")}}" placeholder="Passport Number" class="form-control"  >
                          @error('passport_no')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="passport_expiry_date"> Passport Expiry Date<a style="text-decoration: none;color:red">*</a></label>
                          <input type="date" class="form-control" value="{{old("passport_expiry_date")}}"  placeholder="Passport Expiry Date" name="passport_expiry_date" id="passport_expiry_date" >
                          @error('passport_expiry_date')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-4">
                          <label for="emirates_id_no" class="form-label fw-bold">Emirates Id No<a style="text-decoration: none;color:red">*</a></label>
                          <input type="emirates_id_no" name="emirates_id_no" value="{{old("emirates_id_no")}}"  placeholder="Emirates Id No" class="form-control" maxlength="7">
                          @error('emirates_id_no')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="emirates_id_from_date">Emirates Id From Date<a style="text-decoration: none;color:red">*</a></label>
                          <input type="date" class="form-control" value="{{old("emirates_id_from_date")}}"  placeholder="Emirates Id From Date" name="emirates_id_from_date" id="emirates_id_from_date" >
                          @error('emirates_id_from_date')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                      <div class="form-group col-md-4">
                          <label class="form-label fw-bold" for="emirates_id_to_date">Emirates Id To Date<a style="text-decoration: none;color:red">*</a></label>
                          <input type="date" class="form-control" value="{{old("emirates_id_to_date")}}"  placeholder="Emirates Id To Date" name="emirates_id_to_date" id="emirates_id_to_date" >
                          @error('emirates_id_to_date')
                          <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>


              </div>
            </div>

{{------Visa Details tab------}}

    <div class="tab-pane" id="tab2" role="tabpanel">
      <div class="card-body ">

                    <div class="form-group col-md-6">
                        <label class="form-label fw-bold" for="expiry_date">Visa End Date<a style="text-decoration: none;color:red">*</a></label>
                        <input type="date" class="form-control" value="{{old("expiry_date")}}"  placeholder="Visa End Date" name="expiry_date" id="expiry_date" required>
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

    <div class="tab-pane" id="tab3" role="tabpanel">
        <div class="card-body ">
                        <div class="form-group col-md-6">
                          <label class="form-label fw-bold" for="coverage_from_date">Insurance Coverage From Date<a style="text-decoration: none;color:red">*</a></label>
                          <input type="date" class="form-control" value="{{old("coverage_from_date")}}"  placeholder="Visa Entry Date" name="coverage_from_date" id="coverage_from_date" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label class="form-label fw-bold" for="coverage_to_date">Insurance Coverage To Date<a style="text-decoration: none;color:red">*</a></label>
                          <input type="date" class="form-control" value="{{old("coverage_to_date")}}"  placeholder="Visa End Date" name="coverage_to_date" id="coverage_to_date" required>
                      </div>


                </div>
      </div>

{{------Salary Details tab------}}

      <div class="tab-pane" id="tab4" role="tabpanel">
        <div class="card-body ">


                        <div class="form-group col-md-6">
                            <label for="fullname" class="form-label fw-bold">Total Salary<a style="text-decoration: none;color:red">*</a></label>
                            <input type="text" name="total_salary" value="{{old("total_salary")}}" placeholder="Total Salary" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname" class="form-label fw-bold">HRA<a style="text-decoration: none;color:red">*</a></label>
                            <input type="text" name="hra" value="{{old("hra")}}" placeholder="HRA" class="form-control" required>
                        </div>
                        {{-- <div class="form-group col ">
                            <label for="fullname" class="form-label fw-bold">Overtime Status<a style="text-decoration: none;color:red">*</a></label>
                            <input type="checkbox" name="overtime_status" value="{{old("overtime_status")}}" placeholder="Overtime Status" class="form-control" required>
                        </div> --}}
                        <div class="form-group ">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary ">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>






</form>
