$(document).ready(function(){

    // image preview
    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML("<img class='img_preview'>")).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#images').on('change', function() {
        $('.gallery').html('');
        imagesPreview(this, 'div.gallery');
        });
    });

    //image upload
    $('#btn-upload').on('click', function(){

       var form_data = new FormData();

       // Read selected files
       var totalfiles = document.getElementById('images').files.length;
       for (var index = 0; index < totalfiles; index++) {
          form_data.append("images[]", document.getElementById('images').files[index]);
       }

       // AJAX request
       $.ajax({
         url: 'http://127.0.0.1:8000/api/images/store', 
         type: 'post',
         data: form_data,
         dataType: 'json',
         contentType: false,
         processData: false,
         success: function (response) {
          alert("Images uploaded successfully");
          location.reload();
         }
       });

    });

  // get images
  $.ajax({
    url: "http://127.0.0.1:8000/api/images",
    dataType: 'json',
  }).done(function(res) {
    var len_data = res.data.length;
    for(i=0; i<len_data; i++){
      var img = "<img src='http://127.0.0.1:8000/";
      img += res.data[i].image_name+"'>"; 
      $(".images").append(img);
    }
  }); 

});