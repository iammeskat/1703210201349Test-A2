// get students list
$.ajax({
  url: "/api/students",
  dataType: 'json',
}).done(function(res) {
  var len_data = res.data.length;
  for(i=0; i<len_data; i++){
    var row = "<tr id='tr-"+res.data[i].id+"'>";
    row += '<td>'+res.data[i].id+'</td>';
    row += '<td>'+res.data[i].student_id+'</td>';
    row += "<td><a href='/student/"+res.data[i].id+"'>"+res.data[i].name+"</a></td>";
    row += '<td>'+res.data[i].gender+'</td>';
    row += '<td>'+res.data[i].dob+'</td>';
    row += '<td>'+res.data[i].department+'</td>';
    row += '<td>'+res.data[i].batch+'</td>';
    // row += '<td>'+res.data[i].phone_number+'</td>';
    // row += '<td>'+res.data[i].email+'</td>';
    row += '<td>'+res.data[i].division.name+'</td>';
    row += '<td>'+res.data[i].district.name+'</td>';
    row += "<td><button class='btn btn-danger btn-sm delete' value='"+res.data[i].id+"'>Delete</button></td>";
    row += '</tr>';
    $("#tbody").append(row);
  }
});

// delete student
$(document).on('click', '.delete', function() {
    var confirmalert = confirm("Are you sure?");
    if(confirmalert){
        var id = $(this).val();
        $.ajax({
          url: "/api/student/"+id+"/delete",
          dataType: 'json',
        }).done(function(res) {
            $("#tr-" + id).remove();
            alert('Student deleted successfully')
          
        });
    }
});