@extends('layout.app')
@section('contant')
<button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#danger-alert-modal"><i class=" ri-delete-bin-5-line"></i> </button>
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
                    <button type="button" class="btn btn-light my-2">
                        <i class=" ri-delete-bin-5-line"></i>
                    </button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection