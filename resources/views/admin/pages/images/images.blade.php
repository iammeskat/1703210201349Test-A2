@extends('admin.layouts.default')
@section('main')
<style>
    img{
        width: 200px;
        height: 200px;
        margin-bottom: 10px;
        margin-right: 5px;
        border-radius: 4px;
        box-shadow: 0px 0px 4px black;
    }
    .img_preview{
        width: 100px;
        height: 100px;
        border: 1px solid blue;
        margin: 5px;
        border-radius: 4px;
    }
</style>
<div class="container-fluid">
    <h4 class="mt-4">CRUD, Migration-Seeder-Factory, Validation, Multiple Image Upload & API using Ajax</h4>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Images (Show & Upload)
        </div>
        <div class="card-body" style="width: 500px; margin: 0 auto">
            
            <div id="image-upload-form" class="form-inline">
              
              <div class="form-group mx-sm-3 mb-2">
                    <input type="file" name="images[]" multiple class="form-control-file" id="images">
              </div>
              <button type="submit" id="btn-upload" class="btn btn-primary mb-2"><i class="fa fa-arrow-circle-up"></i> Upload</button>
              <div class="gallery bg-info"></div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <div class="images">
                
            </div>
        </div>
    </div>
</div>

<!-- Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('ajax/multiple_image_upload_and_preview.js') }}"></script>

@stop