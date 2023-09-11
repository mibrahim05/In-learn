$(document).ready(function () {
  //Ajax call form Alredy Exists Email verification
  $("#stuemail").on("keypress blur", function () {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuemail = $("#stuemail").val();
    $.ajax({
      url: "Student/addstudent.php",
      method: "POST",
      data: {
        checkemail: "checkmail",
        stuemail: stuemail,
      },
      success: function (data) {
        console.log(data);
        if (data != 0) {
          $("#statusMsg2").html(
            '<small style ="color:red; font-size:20px;">Emai ID Already Exits !</small>'
          );
          $("#signup").attr("disabled", true);
        } else if (data == 0 && reg.test(stuemail)) {
          $("#statusMsg2").html(
            '<small style ="color:green; font-size:20px;">Good To Go!</small>'
          );
          $("#signup").attr("disabled", false);
        } else if (!reg.test(stuemail)) {
          $("#statusMsg2").html(
            '<small style ="color:red; font-size:15px;">PLease Enter valid Email e.g.example@mail.com!</small>'
          );
          $("#signup").attr("disabled", false);
        }
        if (stuemail == "") {
          $("#statusMsg2").html(
            '<small style ="color:red; font-size:20px;">Please Enter Email ID!</small>'
          );
        }
      },
    });
  });
});

function addStu() {
  var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var stuname = $("#stuname").val();
  var stuemail = $("#stuemail").val();
  var stupass = $("#stupass").val();

  // Checking Form Fields on Form submission

  if (stuname.trim() == "") {
    $("#statusMsg1").html(
      '<small style ="color:red; font-size:20px;">Please Enter Name!</small>'
    );
    $("#stuname").focus();
    return false;
  } else if (stuemail.trim() == "") {
    $("#statusMsg2").html(
      '<small style ="color:red; font-size:20px;">Please Enter Email!</small>'
    );
    $("#stuemail").focus();
    return false;
  } else if (stuemail.trim() != "" && !reg.test(stuemail)) {
    $("#statusMsg2").html(
      '<small style ="color:red; font-size:20px;">PLease Enter valid Email e.g.example@mail.com!</small>'
    );
    $("#stuemail").focus();
    return false;
  } else if (stupass.trim() == "") {
    $("#statusMsg3").html(
      '<small style ="color:red; font-size:20px;">Please Enter Password!</small>'
    );
    $("#stupass").focus();
    return false;
  } else {
    $.ajax({
      url: "Student/addstudent.php",
      method: "POST",
      dataType: "json",
      data: {
        stusignup: "stusignup",
        stuname: stuname,
        stuemail: stuemail,
        stupass: stupass,
      },
      success: function (data) {
        console.log(data);
        if (data == "OK") {
          $("#successMsg").html(
            '<h4 class="alert alert-success"> Registration Successful ! </h4>'
          );
          clearStuRegField();
          // making field empty after signup
        } else if (data == "Failed") {
          $("#successMsg").html(
            '<h4 class="alert alert-danger"> Unable to Register ! </h4>'
          );
        }
      },
    });
  }
}

// Empty All Field
function clearStuRegField() {
  $("#stuRegForm").trigger("reset");
  $("#statusMsg1").html(" ");
  $("#statusMsg2").html(" ");
  $("#statusMsg3").html(" ");
}

// Ajax Call for Student Verification
function checkStuLogin() {
  var stuLogEmail = $("#stuLogEmail").val();
  var stuLogPass = $("#stuLogPass").val();
  $.ajax({
    url: "Student/addstudent.php",
    method: "POST",
    data: {
      checkLogemail: "checklogmail",
      stuLogEmail: stuLogEmail,
      stuLogPass: stuLogPass,
    },
    success: function (data) {
      if (data == 0) {
        $("#statusLogMsg").html(
          '<h4 class="alert alert-danger"> Invalid Email ID or Password ! </h4>'
        );
      } else if (data == 1) {
        $("#statusLogMsg").html(
          '<div class="spinner-border text-success" role="status"></div>'
        );
        // Empty Login Fields
        setTimeout(() => {
          window.location.href = "index.php";
        }, 1000);
      }
    },
  });
}
