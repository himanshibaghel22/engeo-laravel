$(document).ready(function(){
    var table = $('.data-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ url('data') }}",
    columns: [
        {data: 'user_id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        {data: 'mobile_number', name: 'mobile_number'},
        {data: 'address', name: 'address'},
        {data: 'city', name: 'city'},
        {data: 'pin_code', name: 'pin_code'},
        {data: 'pan_number', name: 'pan_number'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
    });
    var table = $('.sub-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ url('sub-data') }}",
    columns: [
        {data: 'donnors', name: 'donnors'},
        {data: 'amount', name: 'amount'},
        {data: 'duration_number', name: 'duration_number'},
        {data: 'duration', name: 'duration'},
        {data: 'emi', name: 'emi'}
    ]
    });
    var table = $('.getData').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ url('getData') }}",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'image', name: 'image'},
        {data: 'title', name: 'title'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
    });
});