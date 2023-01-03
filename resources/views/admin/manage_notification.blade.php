@extends('layout.app')
@section('contant')
<div class="row">
  <div class="col-12">
      <div class="page-title-box">                                    
          <div class="page-title-right">
              <div class="d-grid">
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-notification">Add New</button>
              </div>
          </div>
          <h4 class="page-title">Manage Notifications</h4>
      </div>
  </div>
</div>
<table class="table w-100 noti_table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th width="100px">Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<!-- Add notification Modal -->
<div id="add-notification" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header modal-colored-header bg-primary">
              <h4 class="modal-title" id="compose-header-modalLabel">Notification</h4>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="p-1">
          <form action="{{ url('notification') }}" class="database_operation_form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body px-3 pt-3 pb-0">
                  <div class="mb-2">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" placeholder="Your Name">
                      <span class="error" id="title_error"></span>
                  </div>
                  <div class="mb-2">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" name="description" id="description" value="{{ old('description') }}" placeholder="Description" cols="30" rows="10"></textarea>
                      <span class="error" id="description_error"></span>
                  </div>
              </div>
              <div class="px-3 pb-3">
                  <input type="submit" value="Send" class="btn btn-primary" name="submit" id="submit">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
              </div>
          </form>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection