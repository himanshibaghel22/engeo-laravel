@extends('layout.app')
@section('contant')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">                                    
            <div class="page-title-right">
                <div class="d-grid">
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-users">Add New</button>
                </div>
            </div>
            <h4 class="page-title">Donnor's</h4>
        </div>
    </div>
</div>
<table class="table w-100 data-table">
    <thead>
        <tr>
            <th>User Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th>City</th>
            <th>Pin Code</th>
            <th>PAN Number</th>
            <th width="100px">Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
    <!-- Add Users Modal -->
    <div id="add-users" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="compose-header-modalLabel">Add Donnor's</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-1">
                <form action="{{ url('SubmitData') }}"  class="database_operation_form">
                    @csrf
                    <div class="modal-body px-3 pt-3 pb-0">
                        <div class="mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Your Name">
                            <span class="error" id="name_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Eamil</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Example@email.com">
                            <span class="error" id="email_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="text" name="mobile_number" id="mobile_number" value="{{ old('mobile_number') }}" class="form-control" placeholder="Mobile Number">
                            <span class="error" id="mobile_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" value="{{ old('address') }}" class="form-control" placeholder="Address">
                            <span class="error" id="address_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" id="city" value="{{ old('city') }}" class="form-control" placeholder="City">
                            <span class="error" id="city_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="pin_code" class="form-label">Pin Code</label>
                            <input type="text" name="pin_code" id="pin_code" value="{{ old('pin_code') }}" class="form-control" placeholder="Pin Code">
                            <span class="error" id="pincode_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="pan_number" class="form-label">PAN Number</label>
                            <input type="text" name="pan_number" id="pan_number" value="{{ old('pan_number') }}" class="form-control" placeholder="PAN Number">
                            <span class="error" id="pannumber_error"></span>
                        </div> 
                    </div>
                    <div class="px-3 pb-3">
                        <input type="submit" name="submit"  id="submit" value="Submit" class="btn btn-primary">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- edit Users Modal -->
    <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="compose-header-modalLabel">Edit Detail</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-1">
                <form action="{{ url('UpdateData') }}" class="database_operation_form">
                    @csrf
                    <div class="modal-body px-3 pt-3 pb-0">
                        <div class="mb-2">
                            <input type="hidden" id="edit_id" name="id">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="edit_name"  class="form-control" placeholder="Your Name">
                            <span class="error" id="edit_name_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Eamil</label>
                            <input type="email" name="email" id="edit_email" value="{{ old('email') }}" class="form-control" placeholder="Example@email.com">
                            <span class="error" id="edit_email_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="text" name="mobile_number" id="edit_mobile_number" value="{{ old('mobile_number') }}" class="form-control" placeholder="Mobile Number">
                            <span class="error" id="edit_mobile_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="edit_address" value="{{ old('address') }}" class="form-control" placeholder="Address">
                            <span class="error" id="edit_address_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" id="edit_city" value="{{ old('city') }}" class="form-control" placeholder="City">
                            <span class="error" id="edit_city_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="pin_code" class="form-label">Pin Code</label>
                            <input type="text" name="pin_code" id="edit_pin_code" value="{{ old('pin_code') }}" class="form-control" placeholder="Pin Code">
                            <span class="error" id="edit_pincode_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="pan_number" class="form-label">PAN Number</label>
                            <input type="text" name="pan_number" id="edit_pan_number" value="{{ old('pan_number') }}" class="form-control" placeholder="PAN Number">
                            <span class="error" id="edit_pannumber_error"></span>
                        </div> 
                    </div>
                    <div class="px-3 pb-3">
                        <input type="submit" value="Update" class="btn btn-primary" name="submit" id="submit">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection