window.onload = function() {
    const vkeyLink = window.location.href;
    const vkey = vkeyLink.split("=");
    // console.log(vkey[1].slice(-1));

    if (vkey[1].slice(-1) === "#") {
        vkey[1] = vkey[1].substr(0, vkey[1].length - 1);
    }
    // alert(vkey[1])
    //load session of user
    var xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../../../backend/api/users/get_user_uvkey.php"
    );
    xhttp.send(JSON.stringify({ vkey: vkey[1] }));
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let results = JSON.parse(this.response);
            $("#web-name").html(results.fname);
            $("#mobile-name").html(results.name);
            // console.log(results);
        } else if (this.readyState == 4 && this.status == 500) {

        } else if (this.readyState == 4 && this.status == 404) {}
    };
}