@extends('admin.layouts.default')
@section('main')

<div class="container-fluid">
    <h4 class="mt-4">CRUD, Migration-Seeder-Factory, Validation, Multiple Image Upload & API using Ajax</h4>
    <div class="card mb-4">
        <div class="card-header">
            Student Profile 
        </div>
        <div class="card-body" id='display' style="width: 500px; margin: 0 auto">
            <div class="alert alert-success" id="alert-success" style="width:400px">
                <ul id="success-message">
                    
                </ul>
            </div>
            <div class="table-responsive">
                <table  cellspacing="3" width="400px" height="400px">
                    <tr> <td>Student ID:</td> <th id='student_id'></th> </tr>
                    <tr> <td>Name:</td> <th id='name'></th> </tr>
                    <tr> <td>Gender:</td> <th id='gender'></th> </tr>
                    <tr> <td>Date of Birth:</td> <th id='dob'></th> </tr>
                    <tr> <td>Batch:</td> <th id='batch'></th> </tr>
                    <tr> <td>Department:</td> <th id='department'></th> </tr>
                    <tr> <td>Division:</td> <th id='division'></th> </tr>
                    <tr> <td>District:</td> <th id='district'></th> </tr>
                    <tr> <td>Phone:</td> <th id='phone'></th> </tr>
                    <tr> <td>E-mail:</td> <th id='email'></th> </tr>
                    
                </table>
            </div>
            <button type="button" class="btn btn-primary edit-button">Edit</button>
            <button type="button" class="btn btn-danger delete" >Delete</button>
        </div>
        <div class="card-body" id='edit' style="width: 500px; margin: 0 auto">
            <div class="alert alert-danger" id="alert-danger" style="width:400px">
                <ul id="error-message">
                    
                </ul>
            </div>
            <form id="student-update">
                <div class="table-responsive">
                    <table  cellspacing="3" width="400px">
                        <tr>
                            <td>Student ID:</td>
                            <td><input type="number" class="form-control" name="student_id" id="edit-std_id"></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" class="form-control" name="name" id="edit-name"></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td>
                                <select class="form-control" id="edit-gender" name="gender">
                                    <option value=''>---Select---</option>
                                    <option value="male" >male</option>
                                    <option value="female" >female</option>
                                    <option value="other" >other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><input type="date" class="form-control" name="dob" id="edit-dob"></td>
                        </tr>
                        <tr>
                            <td>Batch:</td>
                            <td><input type="text" class="form-control" name="batch" id="edit-batch"></td>
                        </tr>
                        <tr>
                            <td>Department:</td>
                            <td>
                                <select class="form-control" id="edit-dept" name="department">
                                    <option value=''>---Select---</option>
                                    <option value="CSE" >CSE</option>
                                    <option value="EEE" >EEE</option>
                                    <option value="LAW" >LAW</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Division:</td>
                            <td>
                                <select class="form-control" id="edit-division" name="division_id">
                                    <option>---SELECT DIVISION---</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>District:</td>
                            <td>
                                <select class="form-control" id="edit-district" name="district_id" >
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td><input type="text" class="form-control" name="phone_number" id="edit-phone"></td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><input type="email" class="form-control" name="email" id="edit-email"></td>
                        </tr>                    
                    </table>
                </div>
                <button type="button" class="btn btn-secondary cancel-button " >Cancel</button>
                <button type="submit" class="btn btn-success submit" >Update</button>
            </form>
        </div>
    </div>
</div>

<!-- Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('ajax/ajax-for-edit-&-detail-page.js') }}"></script>

@stop