// Ajax Call for Admin Login Verification
function checkAdminLogin() {
  var adminLogEmail = $("#adminLogemail").val();
  var adminLogPass = $("#adminLogpass").val();
  $.ajax({
    url: "Admin/admin.php",
    method: "POST",
    data: {
      checkLogemail: "checklogmail",
      adminLogEmail: adminLogEmail,
      adminLogPass: adminLogPass,
    },
    success: function (data) {
      if (data == 0) {
        $("#statusAdminLogMsg").html(
          '<h6 class="alert alert-danger"> Invalid Email ID or Password ! </h6>'
        );
      } else if (data == 1) {
        $("#statusAdminLogMsg").html(
          '<h6 class ="alert alert-success">Success Loading...</h6>'
        );
        // Empty Login Fields
        setTimeout(() => {
          window.location.href = "Admin/adminDashboard.php";
        }, 1000);
      }
    },
  });
}
