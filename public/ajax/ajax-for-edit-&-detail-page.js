$(document).ready(function(){

    $("#edit").hide();
    $("#alert-danger").hide();
    $("#alert-success").hide();

    // Get student information
    var url = $(location).attr('href');
    var id = url.split('/').reverse()[0];
    $.ajax({
      url: "/api/student/"+id,
      dataType: 'json',
    }).done(function(res) {
        $("#student_id").html(res.data.student_id);
        $("#name").html(res.data.name);
        $("#gender").html(res.data.gender);
        $("#dob").html(res.data.dob);
        $("#batch").html(res.data.batch);
        $("#department").html(res.data.department);
        $("#division").html(res.data.division.name);
        $("#district").html(res.data.district.name);
        $("#phone").html(res.data.phone_number);
        $("#email").html(res.data.email);
        $(".delete").val(res.data.id);
    });

    // Edit
    $(".edit-button").click(function(){
        $("#display").hide();
        $("#alert-danger").hide();
        $("#edit").show();
        
        var id = $(".delete").val();

        $("#edit-std_id").val($("#student_id").html());
        $("#edit-name").val($("#name").html());
        $("#edit-gender").val($("#gender").html());
        $("#edit-dob").val($("#dob").html());
        $("#edit-batch").val($("#batch").html());
        $("#edit-dept").val($("#department").html());
        $("#edit-phone").val($("#phone").html());
        $("#edit-email").val($("#email").html());
        var div = $("#division").html();
        var dis = $("#district").html();

        // Get division
        $.ajax({
            url: "/api/getdivisions",
            dataType: 'json',
        }).done(function(res) {

            // select division
            $("#edit-division").html('<option>---SELECT DISTRICT---</option>');
            var len_data = res.divisions.length;
            for(i=0; i<len_data; i++){
                if(div == res.divisions[i].name){
                    var option = "<option value='"+res.divisions[i].id+"' selected>";
                    option += res.divisions[i].name+'</option>';
                    var div_id = res.divisions[i].id;

                    // select district
                    $.ajax({
                        url: '/api/'+div_id+'/getdistricts',
                        dataType: 'json',
                    }).done(function(res) {
                        //alert('/api/'+div_id+'/getdistricts');
                        $("#edit-district").html('<option>---SELECT DISTRICT---</option>');
                        var len_data = res.districts.length;
                        for(i=0; i<len_data; i++){
                            if(dis == res.districts[i].name){
                                var option = "<option value='"+res.districts[i].id+"' selected>";
                                option += res.districts[i].name+'</option>';
                            }
                            else{
                                var option = '<option value='+res.districts[i].id+'>';
                                option += res.districts[i].name+'</option>';
                            }
                            $("#edit-district").append(option);
                        }
                    });
                }
                else{
                    var option = '<option value='+res.divisions[i].id+'>';
                    option += res.divisions[i].name+'</option>';
                }
                $("#edit-division").append(option);
            }
        });
    });

    // Get districts
    $("#edit-division").change(function(){
        var div_id = $("#edit-division").val();
        $.ajax({
        url: '/api/'+div_id+'/getdistricts',
        dataType: 'json',
        }).done(function(res) {
            $("#edit-district").html('<option>---SELECT DISTRICT---</option>');
            var len_data = res.districts.length;
            for(i=0; i<len_data; i++){
                var option = '<option value='+res.districts[i].id+'>';
                option += res.districts[i].name+'</option>';
                $("#edit-district").append(option);
            }
            //console.log(res);
        });
    });

    // Cancel edit
    $(".cancel-button").click(function(){
        $("#edit").hide();
        $("#alert-success").hide();
        $("#display").show();
    });

    // student update
    $("#student-update").submit(function(e){
        e.preventDefault();
    
        $.ajax({
            type: "POST",
            url: "../../api/student/"+id+"/update",
            data: $(this).serialize(),
            dataType: "json"
        }).done(function(res){
            console.log(res);
            if(res.error=='false'){
                alert('Student updated successfully.')
                location.reload();
                // $("#alert-success").show();
                // $("#success-message").html('Student updated successfully.');
            }
            else{
                $("#alert-danger").show();
                for(i=0; i<res.errors.length; i++){
                    var list = '<li>'+res.errors[i]+'</li>'
                    $("#error-message").append(list);
                }
            }
        });
    });
});

// Delete student
$(document).on('click', '.delete', function() {
    var confirmalert = confirm("Are you sure?");
    if(confirmalert){
        var id = $(this).val();
        $.ajax({
          url: "/api/student/"+id+"/delete",
          dataType: 'json',
        }).done(function(res) {
            alert('Student deleted successfully')
            window.location.replace("/");
          
        });
    }
});
    