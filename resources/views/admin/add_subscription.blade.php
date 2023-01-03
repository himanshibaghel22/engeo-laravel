@extends('layout.app')
@section('contant')
<form action="{{ url('submitsubscription') }}" class="database_operation_form">
    @csrf   
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">                                    
                <h4 class="page-title">Add Subscription</h4>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Select Donnors</label>
        <select class="form-select" name="donners" id="donners">
            <option value="">Select Donnors</option>
            @foreach ($data as $result)
                <option value="{{ $result['name'] }}">{{ $result['name'] }}</option>
            @endforeach
        </select>
        <span id="donnor_error" class="error"></span>
    </div>
    <div class="mb-3">
        <label>Enter Amount</label>
        <input type="number" name="amount" id="amount" placeholder="Amount" class="form-control">
        <span id="amount_error" class="error"></span>
    </div>
    <div class="mb-3">
        <label for="">Select Duration </label>
        <div class="row">
            <div class="col-md-4">
                <select class="form-select" name="duration_number" id="duration_number">
                    @for ($i = 1; $i <= 100; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor     
                </select>
                <span id="dur_error" class="error"></span>
            </div>
            <div class="col-md-4">
                <select class="form-select" name="duration" id="duration">
                    <option value="Week">Week</option>
                    <option value="Month">Month</option>
                    <option value="Year">Year</option>
                </select>
                <span id="duration_error" class="error"></span>
            </div>
        </div>
        
    </div>
    <div class="mb-3">
        <label for="emi">Number Of Installment</label>
        <input type="number" name="emi" id="emi" class="form-control" placeholder="Number Of Installment">
        <span id="emi_error" class="error"></span>
    </div>
    <div class="mb-3">
       <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection