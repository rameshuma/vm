
<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-header bg-primary">
                <h4 class="modal-title ">Add Project</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-body ">
                    <form method="POST" class="form-row" id="myform" action="{{ route('projectmaster.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="project_no" class="form-label fw-bold">Project No<a style="text-decoration: none;color:red">*</a></label>
                            <input type="number" name="project_no" id="pno" value="{{old("project_no")}}" placeholder="Project No" required class="form-control">
                            <span class='text-danger m-2' id="p1"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="site_no" class="form-label fw-bold">Site No</label>
                            <input type="number" name="site_no" id="sno" value="{{old("site_no")}}" placeholder="site_no" required class="form-control">
                            <span class='text-danger m-2' id="p2"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="site_name" class="form-label fw-bold">Site Name<a style="text-decoration: none;color:red">*</a></label>
                            <input type="text" name="site_name" id="sname" value="{{old("site_name")}}" placeholder="Site Name" required class="form-control" readonly>
                            <span class='text-danger m-2' id="p3"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="project_name" class="form-label fw-bold">Project Name<a style="text-decoration: none;color:red">*</a></label>
                            <input type="text" name="project_name" id="pname" value="{{old("project_name")}}" placeholder="Address" required class="form-control">
                            <span class='text-danger m-2' id="p4"></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="project_type" class="form-label fw-bold"><a style="text-decoration: none;color:red">*</a></label>
                            <div class="form-label">
                            <select id="ptype" name="project_type"  class="form-control" type="text" placeholder="Religion">
                                @foreach(trans('project_type') as $value => $label)
                                    <option @if(old('project_type') == $value) selected @endif value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            <span class='text-danger m-2' id="p5"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="project_comments" class="form-label fw-bold">Project Comments</label>
                            <input type="text" name="project_comments" id="pcmts" value="{{old("project_comments")}}" placeholder="Address" required class="form-control">
                            <span class='text-danger m-2' id="p6"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="manager_name" class="form-label fw-bold">Manager Name<a style="text-decoration: none;color:red">*</a></label>
                            <input type="text" name="manager_name" id="pmanager" value="{{old("manager_name")}}" placeholder="Manager Name" required class="form-control">
                            <span class='text-danger m-2' id="p7"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="manager_contact_number" class="form-label fw-bold">Manager ContactNumber<a style="text-decoration: none;color:red">*</a></label>
                            <input type="text" name="manager_contact_number" id="pmanagercontact" value="{{old("manager_contact_number")}}" placeholder="Manager Contactnumber" required class="form-control">
                            <span class='text-danger m-2' id="p8"></span>
                        </div>



                        <div class="form-group row ">
                            <div class="col-md-8">
                                <button type="submit" id="add_button" class="btn btn-primary ">{{ __('Add') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

