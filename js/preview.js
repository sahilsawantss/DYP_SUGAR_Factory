function filePreview1(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#imgage_1 + img').remove();
          $('#imgage_1').after('<img src="'+e.target.result+'" style="border:3px solid black;" width="100" height="100"/>&nbsp;&nbsp;');
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

  $("#img_1").change(function () {
    $('#imgb_1').hide();
    filePreview1(this);
  });

  function filePreview2(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#imgage_2 + img').remove();
          $('#imgage_2').after('<img src="'+e.target.result+'" style="border:3px solid black;" width="100" height="100"/>&nbsp;&nbsp;');
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

  $("#img_2").change(function () {
    $('#imgb_2').hide();
    filePreview2(this);
  });

  function filePreview3(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#imgage_3 + img').remove();
          $('#imgage_3').after('<img src="'+e.target.result+'" style="border:3px solid black;" width="100" height="100"/>&nbsp;&nbsp;');
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

  $("#img_3").change(function () {
    $('#imgb_3').hide();
    filePreview3(this);
  });

  function filePreview4(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#imgage_4 + img').remove();
          $('#imgage_4').after('<img src="'+e.target.result+'" style="border:3px solid black;" width="100" height="100"/>&nbsp;&nbsp;');
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

  $("#img_4").change(function () {
    $('#imgb_4').hide();
    filePreview4(this);
  });