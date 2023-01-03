@extends('layout.app')
@section('contant')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">                                    
            <div class="page-title-right">
                <div class="d-grid">
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-slider">Add New</button>
                </div>
            </div>
            <h4 class="page-title">Manage Slider</h4>
        </div>
    </div>
</div>
<form class="database_operation_form" action="{{ url('StatusChange') }}">
    @csrf
<table class="table w-100 getData">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th width="100px">Action</th>
        </tr>
    </thead>
</table>
</form>
    <!-- Add slider Modal -->
    <div id="add-slider" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="compose-header-modalLabel">Add Slider</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-1">
                <form action="{{ url('save_slider') }}" class="database_operation_form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body px-3 pt-3 pb-0">
                        <div class="mb-2">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" placeholder="Your Name">
                            <span class="error" id="title_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" accept="image/*" name="image" id="image" value="{{ old('image') }}" class="form-control" placeholder="select image">
                            <span class="error" id="image_error"></span>
                        </div>
                    </div>
                    <div class="px-3 pb-3">
                        <input type="submit" value="Submit" class="btn btn-primary" name="submit" id="submit">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- edit Users Modal -->
    <div id="edit_slider" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="compose-header-modalLabel">Edit Detail</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-1">
                <form action="{{ url('UpdateSlider') }}" class="database_operation_form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body px-3 pt-3 pb-0">
                        <div class="mb-2">
                            <input type="hidden" id="edit_id" name="id">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="edit_title"  class="form-control">
                            <span class="error" id="edit_title_error"></span>
                        </div>
                        <div class="mb-2">
                            <label for="image" class="form-label">image</label>
                            <input type="file" accept="image/*" name="image" id="edit_image" class="form-control">
                            <span class="error" id="edit_image_error"></span>
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

    {{-- delete modal --}}
    <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content modal-filled">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="ri-information-line h1 text-primary"></i>
                        <h4 class="mt-2" style="color: black">Are you sure?</h4>
                        <p class="mt-3" style="color: #918787;">You will not be able to recover this!</p>
                        <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">
                            <i class="mdi mdi-window-close"></i>
                        </button>
                        <a id="con_delete" href="" class="btn btn-light my-2">
                            <i class=" ri-delete-bin-5-line"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection