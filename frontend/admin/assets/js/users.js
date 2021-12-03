$(document).ready(function() {
    //load data
    var user_email_global = "";
    var user_vkey_global = "";
    var user_role_global = "";
    var xhttp = new XMLHttpRequest();
    xhttp.open(
        "GET",
        "../../../ehiremo/backend/api/users/admin_fetch_all.php"
    );
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let results = JSON.parse(this.response);
            // console.log(results);

            var $users = $('#users-table');
            var users_data = '<table style="width: 100%;">';
            users_data += '<tr>';
            users_data += '<th>Name</th>';
            users_data += '<th>Email</th>';
            users_data += '<th>Joined on</th>';
            users_data += '<th>Action</th>';
            users_data += '</tr>';

            $.each(results, function(key, value) {
                users_data += '<tr class="tr-user" id="' + value.user_id + '">';
                users_data += '<td>' + value.name + '</td>';
                users_data += '<td>' + value.email + '</td>';
                users_data += '<td>' + value.created_at + '</td>';
                users_data += '<td> <button> Block </button></td>';
                users_data += '</tr>';

            });
            users_data += '</table>';
            $users.append(users_data);
        }
    };

    $(document).on('click', '.tr-user', function() {
        $(".tr-user").attr("style", "background-color:#fff");
        $(this).attr("style", "background-color:#dae6f1");
        var user_get_id = $(this).attr("id");
        var xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../../ehiremo/backend/api/users/admin_fetch_one.php?user_id=" + user_get_id
        );
        xhttp.send();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let results = JSON.parse(this.response);
                $("#input-name").val(results.name);
                $("#input-gender").val(results.gender);
                $("#input-birthday").val(results.birthday);
                $("#input-address").val(results.address);
                $("#id-container").attr("src", results.front_id);
                user_email_global = results.email;
                user_vkey_global = results.vkey;
                user_role_global = results.role;

                var slider_img = document.querySelector("#id-container");
                var images = [results.front_id, results.back_id, results.whole_id];
                var i = 0;
                $('#large-img').attr('href', images[i]);

                //image controls
                $(document).on('click', '#prev-id', function() {
                    if (i <= 0) i = images.length;
                    i--;
                    $('#large-img').attr('href', images[i]);
                    return setImg();
                });

                $(document).on('click', '#next-id', function() {
                    if (i >= images.length - 1) i = -1;
                    i++;
                    $('#large-img').attr('href', images[i]);
                    return setImg();
                });

                function setImg() {
                    return slider_img.setAttribute("src", images[i]);
                }

            }
        }

    });


    $(document).on('click', '#btn-approve', function() {
        // verify.php?vkey=$vkey
        //send email to user

        var send_email_data = {
            email: user_email_global,
            vkey: user_vkey_global,
            role: user_role_global
        }

        var xhttp = new XMLHttpRequest();
        xhttp.open(
            "POST",
            "../../../ehiremo/backend/api/users/admin_send_email.php"
        );
        xhttp.send(JSON.stringify(send_email_data));
        xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 201) {
                    alert("Email sent");
                    // let results = JSON.parse(this.response);
                }
            }
            // email address
            // vkey
            // alert(user_id_global);
    });

})