window.onload = function() {
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
            // console.log(results);
            // console.log(user_session_data.email);

        } else if (this.readyState == 4 && this.status == 500) {

        } else if (this.readyState == 4 && this.status == 404) {}
    };

}