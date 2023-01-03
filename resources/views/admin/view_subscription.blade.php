@extends('layout.app')
@section('contant')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                {{-- <div class="toast mt-3">
                    <div class="toast-header">
                        <i class="ri-check-line me-2"></i> Insert Data
                    </div>
                </div> --}}
                {{-- <div class="alert alert-success mt-3" role="alert">
                    <i class="ri-check-line me-2"></i> This is a <strong>success</strong> alert - check it out!
                </div> --}}
            </div>
            <h4 class="page-title">Subscriptions</h4>
        </div>
    </div>
</div>
<table class="table w-100 sub-table">
    <thead>
        <tr>
            <th>Donnors</th>
            <th>Amount</th>
            <th>Duration Number</th>
            <th>Duration</th>
            <th>EMI</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
@endsection