@extends('admin.layouts.default')
@section('main')
<div class="container-fluid">
    <h4 class="mt-4">CRUD, Migration-Seeder-Factory, Validation, Multiple Image Upload & API using Ajax</h4>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Create Student
        </div>
        <div class="card-body" style="width: 500px; margin: 0 auto">
            <div class="alert alert-danger" id="alert-danger">
                <ul id="error-message">
                    
                </ul>
            </div>
            <div class="alert alert-success" id="alert-success">
                <ul id="success-message">
                    
                </ul>
            </div>
            
            <form method='POST' id='student-form'>
                
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="number" class="form-control" name="student_id">
                    <small>smal</small>
                </div>
                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="" name="gender">
                        <option value=''>---Select---</option>
                        <option value="male" >male</option>
                        <option value="female" >female</option>
                        <option value="other" >other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" >
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select class="form-control" id="" name="department">
                        <option value=''>---Select---</option>
                        <option value="CSE" >CSE</option>
                        <option value="EEE" >EEE</option>
                        <option value="LAW" >LAW</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="batch">Batch</label>
                    <input type="text" class="form-control" name="batch" >
                </div>
                <div class="form-group">
                    <label for="division">Division</label>
                    <select class="form-control" id="division" name="division_id">
                        <option value="">---SELECT DIVISION---</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="district">District</label>
                    <select class="form-control" id="district" name="district_id">
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" v>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Add  </button>
                </div>                                          
            </form>
            <body>
        </div>
    </div>
</div>

<!-- Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('ajax/ajax-for-create-page.js') }}"></script>
@stop