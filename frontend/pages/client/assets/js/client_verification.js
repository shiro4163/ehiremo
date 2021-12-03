//file preview
function previewFileFront() {
    var preview = document.getElementById('front-id');
    var file = document.getElementById('front-id-img').files[0];
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

function previewFileBack() {
    var preview = document.getElementById('backed-id');
    var file = document.getElementById('back-id-img').files[0];
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

function previewFileWhole() {
    var preview = document.getElementById('whole-id');
    var file = document.getElementById('whole-id-img').files[0];
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

var user_session_data = [];
window.onload = function() {
    //load session of user
    var xhttp = new XMLHttpRequest();
    xhttp.open(
        "GET",
        "../../../backend/api/users/sign_up_session.php"
    );
    xhttp.send();
    // xhttp.send(JSON.stringify(user_data));
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let results = JSON.parse(this.response);
            user_session_data = results;
            $("#web-name").html(results.fname);
            $("#mobile-name").html(results.name);
            console.log(results);

        } else if (this.readyState == 4 && this.status == 500) {

        } else if (this.readyState == 4 && this.status == 404) {}
    };

}

$(document).on('click', '#next-verify', function() {
    if ($("#front-id").attr('src') === undefined || $("#backed-id").attr('src') === undefined) {
        alert("please fill the fields");
    } else {
        $("#modal-message").fadeIn();
    }
});

$(document).on('click', '#next-verify2', function() {
    if ($("#whole-id").attr('src') === undefined) {
        alert("please fill this");
    } else {
        //upload photo here
        var xhttp = new XMLHttpRequest();
        var front_id = document.getElementById("front-id-img").files[0];
        var back_id = document.getElementById("back-id-img").files[0];
        var whole_id = document.getElementById("whole-id-img").files[0];
        var formData = new FormData();
        formData.append('front-id-img', front_id);
        formData.append('back-id-img', back_id);
        formData.append('whole-id-img', whole_id);

        xhttp.open(
            "POST",
            "../../../backend/api/front_id_upload.php"
        );
        xhttp.send(formData);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let results = JSON.parse(this.response);
                console.log(results.url);
                console.log(results.url2);
                console.log(results.url3);

                var user_data = {
                    user_id: user_session_data.user_id,
                    role: user_session_data.role,
                    name: user_session_data.name,
                    fname: user_session_data.fname,
                    gender: user_session_data.gender,
                    address: user_session_data.address,
                    birthday: user_session_data.birthday,
                    age: user_session_data.age,
                    email: user_session_data.email,
                    password: user_session_data.password,
                    front_pic: results.url,
                    back_pic: results.url2,
                    whole_pic: results.url3
                }
                console.log(user_data);
                var xhttp = new XMLHttpRequest();
                xhttp.open(
                    "POST",
                    "../../../backend/api/users/create_user.php"
                );
                xhttp.send(JSON.stringify(user_data));
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 201) {
                        // $("#modal-message").fadeIn();
                        window.location.href = "wait-client-verification.php";
                    } else if (this.readyState == 4 && this.status == 500) {

                    } else if (this.readyState == 4 && this.status == 404) {

                    }
                };

            } else if (this.readyState == 4 && this.status == 400) {
                alert(results.message);
            }
        }
    }
});

$(document).on('click', '#close-message', function() {
    $("#modal-message").fadeOut();
});