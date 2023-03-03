$(document).ready(function () {
  $("#registration").submit(function (event) {
    
     var formData = {
      first_name: $("#first_name").val(),
      last_name: $("#last_name").val(),
      email: $("#email").val(),
      password: $("#password").val(),
      passwordconf: $("#passwordconf").val(),
    };

    $.ajax({
      type: "POST",
      url: "actions/add.php",
      data: formData,
    }).done(function (data) {
        if (data === "auth"){
            $('#msgs').html('Ви успішно авторизовані, вітаємо!');
            $('#registration').hide('slow');
            $('#msgs').removeClass('text-danger').addClass('text-info');
        }
        else{
            $('#msgs').html('Помилка авторизації, повторіть спробу.');
            $('#msgs').removeClass('text-info').addClass('text-danger');
        }
    });
   event.preventDefault();
  });
});