@extends('admin.layouts.default')
@section('main')

<div class="container-fluid">
    <h4 class="mt-4">CRUD, Migration-Seeder-Factory, Validation, Multiple Image Upload & API using Ajax</h4>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Students Table <a href="{{ route('student-create') }}" class="btn btn-primary btn-sm text-white float-right"><i class="fa fa-user-plus"></i> Add Student</a>
        </div>
        <div class="card-body" id="form">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>DoB</th>
                            <th>Dept.</th>
                            <th>Batch</th>
                            <!-- <th>Phone</th>
                            <th>E-mail</th> -->
                            <th>Division</th>
                            <th>District</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('ajax/ajax-for-index-page.js') }}"></script>

<!-- integrate data table -->
<!-- <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.jqueryui.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.jqueryui.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"></script>

<script>$(document).ready(function () {
    $.noConflict();
    var table = $('#table_id').DataTable();
});</script> -->

@stop