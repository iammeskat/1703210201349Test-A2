$("#alert-danger").hide();
$("#alert-success").hide();

// get divisions
$.ajax({
  url: "/api/getdivisions",
  dataType: 'json',
}).done(function(res) {
    var len_data = res.divisions.length;
    for(i=0; i<len_data; i++){
    var option = '<option value='+res.divisions[i].id+'>';
    option += res.divisions[i].name+'</option>';
    $("#division").append(option);
    }
});

// get districts
$("#division").change(function(){
    var div_id = $("#division").val();
    $.ajax({
    url: '/api/'+div_id+'/getdistricts',
    dataType: 'json',
    }).done(function(res) {
        $("#district").html('<option>---SELECT DISTRICT---</option>');
        var len_data = res.districts.length;
        for(i=0; i<len_data; i++){
        var option = '<option value='+res.districts[i].id+'>';
        option += res.districts[i].name+'</option>';
        $("#district").append(option);
        }
    });
});

// form submit
$("#student-form").submit(function(e){
    e.preventDefault();
    //var name = $("#div_name").val();
    $.ajax({
        type: "POST",
        url: "../../api/student/store",
        data: $("#student-form").serialize(),
        dataType: "json"
    }).done(function(res){
        // console.log(res);
        if(res.error=='false'){
            alert("Student added successfully.");
            $("#alert-danger").hide();
            $("#alert-success").show();
            $("#success-message").html('Student added successfully.');
            $("#student-form").trigger("reset");
        }
        else{
            alert("Validation failed");
            $("#error-message").html('');
            $("#alert-danger").show();
            $("#alert-success").hide();
            //console.log(res);
            for(i=0; i<res.errors.length; i++){
                var list = '<li>'+res.errors[i]+'</li>'
                $("#error-message").append(list);
            }
        }
    });
});