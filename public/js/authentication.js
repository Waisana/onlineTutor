// $(document).ready(function () {
//     $('#registration-form').submit(function (e) {
//         e.preventDefault();
//         console.log("clicked");
//         // var actionUrl = "register";
//         // $('#register-btn').html('Submiting...');
//         // $("#register-btn").prop('disabled', true);
//         // $.ajax({
//         //     url: actionUrl,
//         //     type: "post",
//         //     data: new FormData(this),
//         //     dataType: 'json',
//         //     headers: {
//         //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         //     },
//         //     contentType: false,
//         //     cache: false,
//         //     processData: false,
//         // })
//         //     .done(response => {
//         //         $('#register-btn').html('Register User');
//         //         $("#register-btn").prop('disabled', false);
//         //         clearInputs();
//         //         Notification(response.msg, "success");
//         //     })
//         //     .fail(error => {
//         //         if (error.responseJSON.errors.email[0] === "The email has already been taken.") {
//         //             Notification(error.responseJSON.errors.email[0], "warning");
//         //         } else {
//         //             Notification("An Error occuired !!!", "warning");
//         //         }
//         //         $('#register-btn').html('Register User');
//         //         $("#register-btn").prop('disabled', false);
//         //         clearInputs();
//         //     });
//     });
// });