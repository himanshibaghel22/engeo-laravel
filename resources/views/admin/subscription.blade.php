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
            <h4 class="page-title">Subscription</h4>
        </div>
    </div>
</div>

 <!-- Add Users Modal -->
 <div id="add-users" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <h4 class="modal-title" id="compose-header-modalLabel">Add Users</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="p-1">
                <div class="modal-body px-3 pt-3 pb-0">
                    <form>
                    @csrf
                    <div class="mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Eamil</label>
                            <input type="email" id="email" class="form-control" placeholder="Example@email.com">
                        </div>
                        <div class="mb-2">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="number" id="mobile_number" class="form-control" placeholder="Mobile Number">
                        </div>
                        <div class="mb-2">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" id="address" class="form-control" placeholder="Address">
                        </div>
                        <div class="mb-2">
                            <label for="city" class="form-label">City</label>
                            <input type="text" id="city" class="form-control" placeholder="City">
                        </div>
                        <div class="mb-2">
                            <label for="pin_code" class="form-label">Pin Code</label>
                            <input type="text" id="pin_code" class="form-control" placeholder="Pin Code">
                        </div>
                        <div class="mb-2">
                            <label for="pan_number" class="form-label">PAN Number</label>
                            <input type="number" id="pan_number" class="form-control" placeholder="PAN Number">
                        </div>
                    </form>
                </div>
                <div class="px-3 pb-3">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection