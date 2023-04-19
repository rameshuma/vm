@foreach ($datas as $value)

<div id="view_{{$value->site_no}}" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content ">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title"><b>Show SiteMaster</b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
<div class="modal-body">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-primary font-weight-bold text-center">
                                        Profile: {{$value->site_name}}
                                    </h3>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="site_no" class="form-label fw-bold">Site No</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{"SM00".$value->site_no}}
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="site_name" class="form-label fw-bold">Site Name</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{$value->site_name}}
                                            </div>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="site_location" class="form-label fw-bold">Site Location</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{$value->site_location}}
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="site_building" class="form-label fw-bold">Site Building</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{$value->site_building}}
                                            </div>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="site_floor" class="form-label fw-bold">Site Floor</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{$value->site_floor}}
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="room_number" class="form-label fw-bold">Room Number</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{$value->room_number}}
                                            </div>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="site_manager" class="form-label fw-bold">Manager</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{$value->site_manager}}
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="status" class="form-label fw-bold">Status</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{$value->site_status}}
                                            </div>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="site_address" class="form-label fw-bold">Address</label>
                                            <div class="border border-secondary rounded p-2">
                                                {{$value->site_address}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="description" class="form-label fw-bold">Description</label>
                                            <div class="border border-secondary rounded p-2">
                                               <p> {{$value->description}}</p>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    @endforeach