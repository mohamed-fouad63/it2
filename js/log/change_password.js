$("#USER_PASSWORD_CHANGE .btn-success").click(function () {
  var formData = {
    old_pass: $("#old_pass").val(),
    new_pass: $("#new_pass").val(),
    re_new_pass: $("#re_new_pass").val(),
  };
  console.log(formData);
  $.ajax({
    type: "POST",
    url: "../api/tbl_user/change_password.php",
    data: formData,
    success: function (result) {
      if (result == "تم تغيير كلمه المرور بنجاح") {
        alert(result);
        $("#USER_PASSWORD_CHANGE").modal("hide");
      } else {
        alert(result);
      }
    },
  });
});
