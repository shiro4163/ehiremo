window.onload = function() {
    //load session of user
    var xhttp = new XMLHttpRequest();
    xhttp.open(
        "GET",
        "../../../backend/api/users/user_fetch_self.php"
    );
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let results = JSON.parse(this.response);

            if (results.profile_photo === "") {} else {
                $("#web-profile-picture").attr("src", results.profile_photo);
                $("#web-profile2").attr("src", results.profile_photo);
                $("#mobile-profile-picture").attr("src", results.profile_photo);
                $("#profile-picture").attr("src", results.profile_photo);
            }
            $("#web-name").html(results.fname);
            $("#mobile-name").html(results.name);

            $("#input-firstname").val(results.name);
            $("#input-address").val(results.address);
            $("#input-date").val(results.birthday);
            // $("#input-rate").val(results.rate);
            // $("#input-intro").val(results.self_intro);
            // $("#view-portfolio").attr("href", results.portfolio);


            console.log(results);
        } else if (this.readyState == 4 && this.status == 500) {

        } else if (this.readyState == 4 && this.status == 404) {}
    };


    $(document).on('click', '#save-changes', function() {
        //update info
        if ($("#upload").val() == '') {
            //no image upload
        } else {
            //image upload
            var xhttp = new XMLHttpRequest();
            var profile_pic = document.getElementById("upload").files[0];
            var formData = new FormData();
            formData.append('upload', profile_pic);

            xhttp.open(
                "POST",
                "../../../backend/api/profile_picture_upload.php"
            );
            xhttp.send(formData);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let results = JSON.parse(this.response);
                    console.log(results.urlpic);
                    var user_data = {
                        profile_picture: results.urlpic,
                    }
                    console.log(user_data);
                    xhttp.open(
                        "PUT",
                        "../../../backend/api/users/client_profile_pic.php"
                    );
                    xhttp.send(JSON.stringify(user_data));
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 201) {
                            // alert("Profile Updated.");
                            $("#id01").fadeIn();
                        } else if (this.readyState == 4 && this.status == 500) {} else if (this.readyState == 4 && this.status == 404) {}
                    };

                }
            }

        }
    });

    //change password
    $(document).on('click', '#save-btn', function() {
        if (!$("#old-password").val() || !$("#new-password").val() || !$("#conf-password").val()) {
            $('#validation-display').css("display", "block");
            $('#validation-text').text("Please fill all the fields.");
            return;
        } else {
            if ($("#new-password").val().length !== 8) {
                $('#validation-display').css("display", "block");
                $('#validation-text').text("Password must be least of 8 characters long.");
                return;
            } else {
                if ($("#new-password").val() !== $("#conf-password").val()) {
                    $('#validation-display').css("display", "block");
                    $('#validation-text').text("Password not match.");
                    return;
                } else {
                    var password_data = {
                        old_password: $("#old-password").val(),
                        new_password: $("#new-password").val()
                    }

                    var xhttp = new XMLHttpRequest();
                    xhttp.open(
                        "POST",
                        "../../../backend/api/users/change_password.php"
                    );
                    xhttp.send(JSON.stringify(password_data));
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let results = JSON.parse(this.response);

                            // if (results.profile_photo === "") {} else {
                            //     $("#web-profile-picture").attr("src", results.profile_photo);
                            //     $("#web-profile2").attr("src", results.profile_photo);
                            //     $("#mobile-profile-picture").attr("src", results.profile_photo);
                            //     $("#profile-picture").attr("src", results.profile_photo);
                            // }
                            // $("#web-name").html(results.fname);
                            // $("#mobile-name").html(results.name);

                            // $("#input-firstname").val(results.name);
                            // $("#input-address").val(results.address);
                            // $("#input-date").val(results.birthday);
                            // // $("#input-rate").val(results.rate);
                            // // $("#input-intro").val(results.self_intro);
                            // // $("#view-portfolio").attr("href", results.portfolio);
                            $("#modal-password").attr("style", "display:none");
                            $("#id02").fadeIn();
                            console.log(results);
                        } else if (this.readyState == 4 && this.status == 500) {
                            $('#validation-display').css("display", "block");
                            $('#validation-text').text("Wrong password please try again.");
                            return;
                        } else if (this.readyState == 4 && this.status == 404) {}
                    };

                }
            }

        }

    });

    $(document).on('click', '.logout', function(e) {
        var xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../../backend/api/users/logout.php"
        );
        xhttp.send();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let results = JSON.parse(this.response);
                console.log(results);
                window.location.href = "../../../frontend/";
            } else if (this.readyState == 4 && this.status == 500) {

            } else if (this.readyState == 4 && this.status == 404) {}
        };
    })

}

//file preview
function previewFile() {
    var preview = document.getElementById('profile-picture');
    var file = document.getElementById('upload').files[0];
    var reader = new FileReader();

    reader.onloadend = function() {
        preview.src = reader.result;
    }
    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}