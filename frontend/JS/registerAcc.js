(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
// $(document).ready(function() {
//     $("#show_hide_password a").on('click', function(event) {
//         event.preventDefault();
//         if($('#show_hide_password input').attr("type") == "text"){
//             $('#show_hide_password input').attr('type', 'password');
//             $('#show_hide_password i').addClass( "bi bi-eye-slash-fill" );
//             $('#show_hide_password i').removeClass( "fa-eye" );
//         }else if($('#show_hide_password input').attr("type") == "password"){
//             $('#show_hide_password input').attr('type', 'text');
//             $('#show_hide_password i').removeClass( "bi bi-eye-slash-fill" );
//             $('#show_hide_password i').addClass( "bi bi-eye-fill" );
//         }
//     });
// });
