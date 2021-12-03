$(document).on('click', '#continue-email', function(event) {
    event.preventDefault();

    if ($("#input-email").val() === "" || $("#input-password").val() === "") {
        alert("Please fill all the fields");
        return;
    }

    var login_data = {
        login_email: $("#input-email").val(),
        login_password: $("#input-password").val()
    };

    var xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../backend/api/users/login.php"
    );
    xhttp.send(JSON.stringify(login_data));
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 201) {
            let results = JSON.parse(this.response);
            // console.log(results);
            if (results.role === "freelancer") {
                window.location.href = "pages/talent/jobs/all-job-post.php";
            } else if (results.role === "client") {
                window.location.href = "pages/client/talents/browse-talents.php";
            }
            // alert("Logged in");
        } else if (this.readyState == 4 && this.status == 500) {

        } else if (this.readyState == 4 && this.status == 404) {
            alert("No account found.");
        }
    };

});