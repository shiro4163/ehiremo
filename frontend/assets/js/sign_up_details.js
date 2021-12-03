$(document).ready(function() {

    // ********** reg-form ********** //
    $('#signup-form').on('submit', function(event) {
        event.preventDefault();

        //age validation
        var today = new Date();
        var date = new Date($('#input-date').val());
        var newdate = today.getFullYear() - 18;
        var mindate = newdate - 60;
        if (date.getFullYear() <= newdate && date.getFullYear() >= mindate) {
            $('#validation-display').css("display", "none");
        } else {
            $('#validation-display').css("display", "block");
            $('#validation-text').text("Invalid Age. must be 18 years old or above.");
            return;
        }

        //password validation 
        if ($("#input-password").val().length < 8) {
            $('#validation-display').css("display", "block");
            $('#validation-text').text("Password must be 8 to 10 characters.");
            return;
        } else if ($("#input-password").val() != $("#input-password-conf").val()) {
            $('#validation-display').css("display", "block");
            $('#validation-text').text("Password not match.");
            return;
        }

        store_session_data();

        // var email = $('#input-email').val();
        // $.ajax({
        //     type: 'POST',
        //     url: '../backend/api/users/validate_email.php',
        //     data: JSON.stringify({ user_email: email }),
        //     contentType: false,
        //     // cache: false,
        //     processData: false,
        //     success: function(data) {
        //         console.log(data.message);
        //         //store session here
        //         store_session_data();
        //         // window.location.href = ""
        //         // alert("email valid")
        //     },
        //     error: function(jqXHR, exception) {
        //         alert("invalid email");
        //         console.log(jqXHR.responseText);
        //     }
        // }); //

        function store_session_data() {
            //role
            var ele = document.getElementsByName('user_pos');
            var user;
            var user_role;

            for (i = 0; i < ele.length; i++) {
                if (ele[i].checked) {
                    user = ele[i].value;
                }
            }

            if (user === "client") {
                user_role = "client";
            } else if (user === "freelancer") {
                user_role = "freelancer";
            } else {}

            var fname = $('#input-firstname').val();
            Newfname = fname.replace(/\b[a-z]/g, function(txtjq) {
                return txtjq.toUpperCase();
            });

            var fname2 = $('#input-lastname').val();
            Newfname2 = fname2.replace(/\b[a-z]/g, function(txtjq2) {
                return txtjq2.toUpperCase();
            });

            var user_address = $('#input-address').val();
            NewAddress = user_address.replace(/\b[a-z]/g, function(txtjq3) {
                return txtjq3.toUpperCase();
            });

            var user_gender = $('#select-gender').val();
            var user_birthday = ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '/' + ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '/' + date.getFullYear();

            var user_data = {
                user_id: Date.now().toString(36) + Math.random().toString(36).substr(2),
                role: user_role,
                name: Newfname + " " + $("#input-mi").val().toUpperCase() + ". " + Newfname2,
                fname: Newfname,
                gender: user_gender,
                address: NewAddress,
                birthday: user_birthday,
                age: today.getFullYear() - date.getFullYear(),
                email: $('#input-email').val(),
                password: $('#input-password').val(),
            };
            console.log(user_data);

            if (user_role === "freelancer") {
                user_role = "talent";
            }

            var xhttp = new XMLHttpRequest();
            xhttp.open(
                "POST",
                "../backend/api/users/create_signup_session.php"
            );
            xhttp.send(JSON.stringify(user_data));
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    window.location = "../frontend/pages/" + user_role + "/" + user_role + "-verification.php";
                } else if (this.readyState == 4 && this.status == 500) {

                } else if (this.readyState == 4 && this.status == 404) {
                    // alert("No account found.");
                }
            };

        }


    }); //sign up

    // const capitalize = (str) => {
    //     if (typeof str === 'string') {
    //         return str.replace(/^\w/, c => c.toUpperCase());
    //     } else {
    //         return '';
    //     }
    // };
})