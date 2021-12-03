window.onload = function() {

    var current_page = 1;
    var current_search_page = 1;
    var load_search_data = {};
    var total_count = 0;
    var total_count_search = 0;

    //load session of user
    var xhttp = new XMLHttpRequest();
    xhttp.open(
        "GET",
        "../../../../backend/api/users/user_fetch_self.php"
    );
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let results = JSON.parse(this.response);
            console.log(results);
            if (results.profile_photo === "") {} else {
                $("#web-profile-picture").attr("src", results.profile_photo);
                $("#mobile-profile-picture").attr("src", results.profile_photo);
            }
            $("#web-name").html(results.fname);
            $("#mobile-name").html(results.name);
        }
    }

    //************ load page function ************//
    load_data(current_page);

    function load_data(page, action) {
        var user_page = {
            pagee: page
        }
        if (action === "search") {
            // var txt = $("#search-txt").val();
            // var search_data = {
            //     search: "tae",
            //     filter: "job_headline",
            //     pagee: current_search_page
            // }
            load_search_data.pagee = current_search_page;
            console.log(load_search_data);
            $.ajax({
                url: "../../../../backend/api/users/search_freelancer_saved.php",
                method: "POST",
                data: JSON.stringify(load_search_data),
                success: function(data) {
                    console.log(data);
                    $('#freelancer-lists').html('');
                    if (data && data.length == 0) {
                        document.getElementById("freelancer-lists").insertAdjacentHTML(
                            "beforeend",
                            `
                            <div class="col-2 col-2-22">
    
                                <div class="col-2-2">
                                    <p style="color:#555;font-size: 14px;">0 Freelancer found.</p>
                                    <label style="color:#555;font-size: 16px;
                                    margin-right: 10px;
                                    margin-top: 3px;" for="select-sort">Filter by: </label>
                                    <select id="select-sort" >
                                        <option value="name">Name</option>
                                        <option value="address">Location</option>
                                        <option value="age">Age</option>
                                        <option value="rating">Rating</option>
                                        <option value="services_offer">Services</option>
                                    </select>
                                </div>
            
                                <div style="flex-basis: 50%;">
                                    <div class="wrapper">
                                        <img alt="" class="search-icon" src="../../../assets/images/index/search.png">
                                        <input placeholder="Search" type="text" class="search" id="search-txt">
                                        <button id="continue-search">Go</button>
                                    </div>
                                </div>
                            </div>
                        `
                        );

                        document.getElementById("freelancer-lists").insertAdjacentHTML(
                            "beforeend",
                            `
                                    <div class="col-2" id="page-btn">
    
                                        <div style="width: 70%;">
                                            <p style="color:#555;font-size: 14px;">End of results.</p>
                                        </div>
    
                                        <div class="controls-div" style="display:flex;justify-content:flex-end;text-align:right;">
                                            <button id="prev-page"  class="control-btn"> &#10094; Back </button>
                                        </div>
    
                                    </div>
    
                                    `
                        );

                        $('#prev-page').on('click', function(event) {
                            $('#freelancer-lists').html('');
                            load_data(1);
                            current_page = 1;
                            current_search_page = 1;
                            $('#prev-page').attr("style", "display:none;");
                        });
                        return;
                    }

                    var xhttp = new XMLHttpRequest();
                    xhttp.open(
                        "POST",
                        "../../../../backend/api/users/freelancer_count_search_saved.php"
                    );
                    xhttp.send(JSON.stringify(load_search_data));
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let results = JSON.parse(this.response);
                            total_count_search = results.total_freelancer_count;
                            $("#total-count").text(results.total_freelancer_count);
                            $("#total-count-first").text(results.total_freelancer_count);
                        }
                    }

                    document.getElementById("freelancer-lists").insertAdjacentHTML(
                        "beforeend",
                        `
                        <div class="col-2 col-2-22">
    
                        <div class="col-2-2">
                            <p style="color:#555;font-size: 14px;"><span id="total-count-first"> </span> Freelancer found.</p>
                            <label style="color:#555;font-size: 16px;
                            margin-right: 10px;
                            margin-top: 3px;" for="select-sort">Filter by: </label>
                            <select id="select-sort" >
                                <option value="name">Name</option>
                                <option value="address">Location</option>
                                <option value="age">Age</option>
                                <option value="rating">Rating</option>
                                <option value="services_offer">Services</option>
                            </select>
                        </div>
    
                        <div style="flex-basis: 50%;">
                            <div class="wrapper">
                                <img alt="" class="search-icon" src="../../../assets/images/index/search.png">
                                <input placeholder="Search" type="text" class="search" id="search-txt">
                                <button id="continue-search">Go</button>
                            </div>
                        </div>
                    </div>
                        `
                    );

                    var rowCount = 0;
                    for (let row of data) {
                        rowCount++;
                        // console.log(row.freelancer_id);
                        var xhttp = new XMLHttpRequest();
                        xhttp.open(
                            "POST",
                            "../../../../backend/api/users/view_profile_id.php"
                        );
                        xhttp.send(JSON.stringify({ id: row.freelancer_id }));
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                let results = JSON.parse(this.response);
                                console.log(results);

                                var xhttp2 = new XMLHttpRequest();
                                xhttp2.open(
                                    "POST",
                                    "../../../../backend/api/users/get_rating.php"
                                );
                                xhttp2.send(JSON.stringify({ id: results.user_id }));
                                xhttp2.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        let resultss = JSON.parse(this.response);
                                        // console.log(results.average_rating);
                                        $(`#rateYoNum${results.user_id}`).text(resultss.average_rating)
                                        $(function() {
                                            $(`#rateYo${results.user_id}`).rateYo({
                                                "rating": resultss.average_rating,
                                                starWidth: "17px",
                                                normalFill: "#A0A0A0",
                                                ratedFill: "#14a800",
                                                readOnly: true
                                            });
                                        });
                                    }
                                }


                                document.getElementById("freelancer-lists").insertAdjacentHTML(
                                    "beforeend",
                                    `   
                                        <div class="col-2 less-padding" style="text-align: left;
                                        justify-content: center;border-bottom: 1px solid rgb(214, 214, 214);">

                                        <div style="text-align: left;display: flex;flex-direction: row;">
                                            <div class="div-1">
                                                <img alt="" style="border-radius: 50%;" src="${results.profile_photo || '../assets/images/people.png'}" width="70" height="70" />
                                            </div>

                                            <div class="div-2">
                                                <h1 style="color: #14a800;text-decoration:underline;cursor:pointer;"
                                                class="view-profile" id="name${results.user_id}">
                                                    ${results.name}</h1>
                                                <p class="p-grey" style="color: #555;">${results.address}</p>
                                                <div style="display:flex;flex-direction:row;justify-content:flex-start;">
                                                    <p class="p-grey" style="font-size:14px;color:#555;"> Rating : <span id="rateYoNum${results.user_id}" style="color:#14a800"> </span></p>
                                                    <div id="rateYo${results.user_id}" >

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="div-3">
                                            <button title="button" class="remove-btn" id="${results.user_id}">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                                <button class="invite-to-job-btn"> Invite</button>
                                            </div>
                                        </div>

                                        <div class="skills-button">
                                            <p class="p-grey" style="color:rgb(75, 75, 75);margin-bottom: 5px;">
                                            ${results.self_intro}
                                            </p>
                                            <p class="p-grey" style="margin-bottom: 5px;">Rate - ${results.rate}</p>
                                            <p class="p-grey" style="margin-bottom: 5px;">Age - ${results.age} years old</p>
                                            <div id="sk${results.user_id}" class="skills-button" style="margin-top: 5px;
                                            margin-bottom: 5px;">

                                            </div>

                                        </div>


                                    </div>

                                `
                                );

                                var services = [];
                                services = results.services_offer.split(",");
                                // console.log(services);
                                var ul = document.getElementById(`sk${results.user_id}`);
                                for (let i = 0; i < services.length; i++) {
                                    var li = document.createElement("button");
                                    li.setAttribute('id', services[i]);
                                    li.appendChild(document.createTextNode(services[i]));
                                    ul.appendChild(li);
                                }

                            }
                        }

                    }



                    setTimeout(function() {
                        document.getElementById("freelancer-lists").insertAdjacentHTML(
                            "beforeend",
                            `
                                    <div class="col-2" id="page-btn">
    
                                        <div style="width: 70%;">
                                            <p style="color:#555;font-size: 14px;">${rowCount} out of <span id="total-count">${total_count_search} </span> Freelancers</p>
                                        </div>
    
                                        <div class="controls-div">
                                            <button id="prev-page" class="control-btn"> &#10094; Previous </button>
                                            <p style="color:#555;font-size: 20px;
                                                margin-left: 10px;margin-right: 10px;"><u>${current_search_page}</u></p>
                                            <button id="next-page" class="control-btn"> Next &#10095;</button>
                                        </div>
    
                                    </div>
    
                            `
                        );
                        if (current_search_page === 1) {
                            $('#prev-page').attr("style", "opacity:0;");
                        } else {
                            $('#prev-page').attr("style", "opacity:1;");
                        }

                        $('#next-page').on('click', function(event) {
                            $('#freelancer-lists').html('');
                            var new_page = ++current_search_page;
                            load_data(new_page, "search");
                            current_search_page = new_page;
                        });

                        $('#prev-page').on('click', function(event) {
                            $('#freelancer-lists').html('');
                            var new_page = --current_search_page;
                            if (new_page === 0) {
                                load_data(1);
                                current_search_page = 1;
                                $('#prev-page').attr("style", "display:none;");
                            } else {
                                load_data(new_page, "search");
                                current_search_page = new_page;
                            }
                        });
                    }, 100);



                }
            })
            return;

        }
        $.ajax({
            url: "../../../../backend/api/users/my_saved_freelancers.php",
            type: "POST",
            contentType: false,
            processData: false,
            data: JSON.stringify(user_page),
            success: function(data) {
                console.log(data);
                $('#freelancer-lists').html('');
                if (data && data.length == 0) {
                    document.getElementById("freelancer-lists").insertAdjacentHTML(
                        "beforeend",
                        `
                        <div class="col-2 col-2-22">

                    <div class="col-2-2">
                        <p style="color:#555;font-size: 14px;">0 Freelancer found.</p>
                        <label style="color:#555;font-size: 16px;
                        margin-right: 10px;
                        margin-top: 3px;" for="select-sort">Filter by: </label>
                        <select id="select-sort">
                            <option value="name">Name</option>
                            <option value="address">Location</option>
                            <option value="age">Age</option>
                            <option value="rating">Rating</option>
                            <option value="services_offer">Services</option>
                        </select>
                    </div>

                    <div style="flex-basis: 50%;">
                        <div class="wrapper">
                            <img alt="" class="search-icon" src="../../../assets/images/index/search.png">
                            <input placeholder="Search" type="text" class="search" id="search-txt">
                            <button id="continue-search">Go</button>
                        </div>
                    </div>
                </div>
                    `
                    );

                    document.getElementById("freelancer-lists").insertAdjacentHTML(
                        "beforeend",
                        `
                                <div class="col-2" id="page-btn">

                                    <div style="width: 70%;">
                                        <p style="color:#555;font-size: 14px;">End of results.</p>
                                    </div>

                                    <div class="controls-div" style="display:flex;justify-content:flex-end;text-align:right;">
                                        <button id="prev-page"  class="control-btn"> &#10094; Back </button>
                                    </div>

                                </div>

                                `
                    );

                    $('#prev-page').on('click', function(event) {
                        $('#freelancer-lists').html('');
                        load_data(1);
                        current_page = 1;
                        current_search_page = 1;
                        $('#prev-page').attr("style", "display:none;");
                    });
                    return;
                }

                var xhttp = new XMLHttpRequest();
                xhttp.open(
                    "GET",
                    "../../../../backend/api/users/freelancer_count_saved.php"
                );
                xhttp.send();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let results = JSON.parse(this.response);
                        total_count = results.total_freelancer_count.total_freelancer_count;
                        $("#total-count").text(results.total_freelancer_count.total_freelancer_count);
                        $("#total-count-first").text(results.total_freelancer_count.total_freelancer_count);
                    }
                }


                document.getElementById("freelancer-lists").insertAdjacentHTML(
                    "beforeend",
                    `
                    <div class="col-2 col-2-22">

                    <div class="col-2-2">
                        <p style="color:#555;font-size: 14px;"><span id="total-count-first"> </span> Freelancer found.</p>
                        <label style="color:#555;font-size: 16px;
                        margin-right: 10px;
                        margin-top: 3px;" for="select-sort">Filter by: </label>
                        <select id="select-sort" >
                            <option value="name">Name</option>
                            <option value="address">Location</option>
                            <option value="age">Age</option>
                            <option value="rating">Rating</option>
                            <option value="services_offer">Services</option>
                        </select>
                    </div>

                    <div style="flex-basis: 50%;">
                        <div class="wrapper">
                            <img alt="" class="search-icon" src="../../../assets/images/index/search.png">
                            <input placeholder="Search" type="text" class="search" id="search-txt">
                            <button id="continue-search">Go</button>
                        </div>
                    </div>
                </div>
                    `
                );


                var rowCount = 0;
                for (let row of data) {
                    rowCount++;
                    console.log(row.freelancer_id);

                    var xhttp = new XMLHttpRequest();
                    xhttp.open(
                        "POST",
                        "../../../../backend/api/users/view_profile_id.php"
                    );
                    xhttp.send(JSON.stringify({ id: row.freelancer_id }));
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let results = JSON.parse(this.response);
                            console.log(results);

                            var xhttp2 = new XMLHttpRequest();
                            xhttp2.open(
                                "POST",
                                "../../../../backend/api/users/get_rating.php"
                            );
                            xhttp2.send(JSON.stringify({ id: results.user_id }));
                            xhttp2.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    let resultss = JSON.parse(this.response);
                                    // console.log(results.average_rating);
                                    $(`#rateYoNum${results.user_id}`).text(resultss.average_rating)
                                    $(function() {
                                        $(`#rateYo${results.user_id}`).rateYo({
                                            "rating": resultss.average_rating,
                                            starWidth: "17px",
                                            normalFill: "#A0A0A0",
                                            ratedFill: "#14a800",
                                            readOnly: true
                                        });
                                    });
                                }
                            }


                            document.getElementById("freelancer-lists").insertAdjacentHTML(
                                "beforeend",
                                `   
                                        <div class="col-2 less-padding" style="text-align: left;
                                        justify-content: center;border-bottom: 1px solid rgb(214, 214, 214);">

                                        <div style="text-align: left;display: flex;flex-direction: row;">
                                            <div class="div-1">
                                                <img alt="" style="border-radius: 50%;" src="${results.profile_photo || '../assets/images/people.png'}" width="70" height="70" />
                                            </div>

                                            <div class="div-2">
                                                <h1 style="color: #14a800;text-decoration:underline;cursor:pointer;"
                                                class="view-profile" id="name${results.user_id}">
                                                    ${results.name}</h1>
                                                <p class="p-grey" style="color: #555;">${results.address}</p>
                                                <div style="display:flex;flex-direction:row;justify-content:flex-start;">
                                                    <p class="p-grey" style="font-size:14px;color:#555;"> Rating : <span id="rateYoNum${results.user_id}" style="color:#14a800"> </span></p>
                                                    <div id="rateYo${results.user_id}" >

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="div-3">
                                            <button title="button" class="remove-btn" id="${results.user_id}">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                                <button class="invite-to-job-btn"> Invite</button>
                                            </div>
                                        </div>

                                        <div class="skills-button">
                                            <p class="p-grey" style="color:rgb(75, 75, 75);margin-bottom: 5px;">
                                            ${results.self_intro}
                                            </p>
                                            <p class="p-grey" style="margin-bottom: 5px;">Rate - ${results.rate}</p>
                                            <p class="p-grey" style="margin-bottom: 5px;">Age - ${results.age} years old</p>
                                            <div id="sk${results.user_id}" class="skills-button" style="margin-top: 5px;
                                            margin-bottom: 5px;">

                                            </div>

                                        </div>


                                    </div>

                                `
                            );

                            var services = [];
                            services = results.services_offer.split(",");
                            // console.log(services);
                            var ul = document.getElementById(`sk${results.user_id}`);
                            for (let i = 0; i < services.length; i++) {
                                var li = document.createElement("button");
                                li.setAttribute('id', services[i]);
                                li.appendChild(document.createTextNode(services[i]));
                                ul.appendChild(li);
                            }

                        }
                    }
                }

                setTimeout(function() {

                    document.getElementById("freelancer-lists").insertAdjacentHTML(
                        "beforeend",
                        `
                                    <div class="col-2" id="page-btn" >
    
                                        <div style="width: 70%;">
                                            <p style="color:#555;font-size: 14px;">${rowCount} out of <span id="total-count">${total_count} </span> Freelancers</p>
                                        </div>
    
                                        <div class="controls-div">
                                            <button id="prev-page" class="control-btn"> &#10094; Previous </button>
                                            <p style="color:#555;font-size: 20px;
                                                margin-left: 10px;margin-right: 10px;"><u>${current_page}</u></p>
                                            <button id="next-page" class="control-btn"> Next &#10095;</button>
                                        </div>
    
                                    </div>
    
                            `
                    );

                    if (current_page === 1) {
                        $('#prev-page').attr("style", "opacity:0;");
                    } else {
                        $('#prev-page').attr("style", "opacity:1;");
                    }

                    $('#next-page').on('click', function(event) {
                        $('#freelancer-lists').html('');
                        var new_page = ++current_page;
                        load_data(new_page);
                        current_page = new_page;
                    });

                    $('#prev-page').on('click', function(event) {
                        $('#freelancer-lists').html('');
                        var new_page = --current_page;
                        if (new_page === 0) {
                            load_data(1);
                            current_page = 1;
                            $('#prev-page').attr("style", "display:none;");
                        } else {
                            load_data(new_page);
                            current_page = new_page;
                        }
                    });
                }, 100);

            }
        })
    }


    //************ search freelancer data  ************//
    $(document).on('click', '#continue-search', function() {
        var txt = $("#search-txt").val();
        current_search_page = 1;
        var search_data = {
            search: txt,
            filter: $("#select-sort").val(),
            pagee: current_search_page
        }
        load_search_data = {
            search: txt,
            filter: $("#select-sort").val(),
        };
        console.log(search_data)
        $.ajax({
                url: "../../../../backend/api/users/search_freelancer_saved.php",
                method: "POST",
                data: JSON.stringify(search_data),
                success: function(data) {
                    console.log(data);
                    // $("#result").html(data);
                    $('#freelancer-lists').html('');
                    if (data && data.length == 0) {
                        document.getElementById("freelancer-lists").insertAdjacentHTML(
                            "beforeend",
                            `
                            <div class="col-2 col-2-22">
    
                                <div class="col-2-2">
                                    <p style="color:#555;font-size: 14px;">0 Freelancer found.</p>
                                    <label style="color:#555;font-size: 16px;
                                    margin-right: 10px;
                                    margin-top: 3px;" for="select-sort">Filter by: </label>
                                    <select id="select-sort">
                                        <option value="name">Name</option>
                                        <option value="address">Location</option>
                                        <option value="age">Age</option>
                                        <option value="rating">Rating</option>
                                        <option value="services_offer">Services</option>
                                    </select>
                                </div>
            
                                <div style="flex-basis: 50%;">
                                    <div class="wrapper">
                                        <img alt="" class="search-icon" src="../../../assets/images/index/search.png">
                                        <input placeholder="Search" type="text" class="search" id="search-txt">
                                        <button id="continue-search">Go</button>
                                    </div>
                                </div>
                            </div>
                        `
                        );

                        document.getElementById("freelancer-lists").insertAdjacentHTML(
                            "beforeend",
                            `
                                    <div class="col-2" id="page-btn">
    
                                        <div style="width: 70%;">
                                            <p style="color:#555;font-size: 14px;">End of results.</p>
                                        </div>
    
                                        <div class="controls-div" style="display:flex;justify-content:flex-end;text-align:right;">
                                            <button id="prev-page"  class="control-btn"> &#10094; Back </button>
                                        </div>
    
                                    </div>
    
                                    `
                        );

                        $('#prev-page').on('click', function(event) {
                            $('#freelancer-lists').html('');
                            load_data(1);
                            current_page = 1;
                            current_search_page = 1;
                            $('#prev-page').attr("style", "display:none;");
                        });
                        return;
                    }

                    var xhttp = new XMLHttpRequest();
                    xhttp.open(
                        "POST",
                        "../../../../backend/api/users/freelancer_count_search_saved.php"
                    );
                    xhttp.send(JSON.stringify(search_data));
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let results = JSON.parse(this.response);
                            total_count_search = results.total_freelancer_count;
                            $("#total-count").text(results.total_freelancer_count);
                            $("#total-count-first").text(results.total_freelancer_count);
                        }
                    }

                    document.getElementById("freelancer-lists").insertAdjacentHTML(
                        "beforeend",
                        `
                        <div class="col-2 col-2-22">
    
                        <div class="col-2-2">
                            <p style="color:#555;font-size: 14px;"><span id="total-count-first"> </span> Freelancer found.</p>
                            <label style="color:#555;font-size: 16px;
                            margin-right: 10px;
                            margin-top: 3px;" for="select-sort">Filter by: </label>
                            <select id="select-sort" >
                                <option value="name">Name</option>
                                <option value="address">Location</option>
                                <option value="age">Age</option>
                                <option value="rating">Rating</option>
                                <option value="services_offer">Services</option>
                            </select>
                        </div>
    
                        <div style="flex-basis: 50%;">
                            <div class="wrapper">
                                <img alt="" class="search-icon" src="../../../assets/images/index/search.png">
                                <input placeholder="Search" type="text" class="search" id="search-txt">
                                <button id="continue-search">Go</button>
                            </div>
                        </div>
                    </div>
                        `
                    );

                    var rowCount = 0;
                    for (let row of data) {
                        rowCount++;
                        // console.log(row.freelancer_id);
                        var xhttp = new XMLHttpRequest();
                        xhttp.open(
                            "POST",
                            "../../../../backend/api/users/view_profile_id.php"
                        );
                        xhttp.send(JSON.stringify({ id: row.freelancer_id }));
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                let results = JSON.parse(this.response);
                                console.log(results);

                                var xhttp2 = new XMLHttpRequest();
                                xhttp2.open(
                                    "POST",
                                    "../../../../backend/api/users/get_rating.php"
                                );
                                xhttp2.send(JSON.stringify({ id: results.user_id }));
                                xhttp2.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        let resultss = JSON.parse(this.response);
                                        // console.log(results.average_rating);
                                        $(`#rateYoNum${results.user_id}`).text(resultss.average_rating)
                                        $(function() {
                                            $(`#rateYo${results.user_id}`).rateYo({
                                                "rating": resultss.average_rating,
                                                starWidth: "17px",
                                                normalFill: "#A0A0A0",
                                                ratedFill: "#14a800",
                                                readOnly: true
                                            });
                                        });
                                    }
                                }


                                document.getElementById("freelancer-lists").insertAdjacentHTML(
                                    "beforeend",
                                    `   
                                        <div class="col-2 less-padding" style="text-align: left;
                                        justify-content: center;border-bottom: 1px solid rgb(214, 214, 214);">

                                        <div style="text-align: left;display: flex;flex-direction: row;">
                                            <div class="div-1">
                                                <img alt="" style="border-radius: 50%;" src="${results.profile_photo || '../assets/images/people.png'}" width="70" height="70" />
                                            </div>

                                            <div class="div-2">
                                                <h1 style="color: #14a800;text-decoration:underline;cursor:pointer;"
                                                class="view-profile" id="name${results.user_id}">
                                                    ${results.name}</h1>
                                                <p class="p-grey" style="color: #555;">${results.address}</p>
                                                <div style="display:flex;flex-direction:row;justify-content:flex-start;">
                                                    <p class="p-grey" style="font-size:14px;color:#555;"> Rating : <span id="rateYoNum${results.user_id}" style="color:#14a800"> </span></p>
                                                    <div id="rateYo${results.user_id}" >

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="div-3">
                                            <button title="button" class="remove-btn" id="${results.user_id}">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                                <button class="invite-to-job-btn"> Invite</button>
                                            </div>
                                        </div>

                                        <div class="skills-button">
                                            <p class="p-grey" style="color:rgb(75, 75, 75);margin-bottom: 5px;">
                                            ${results.self_intro}
                                            </p>
                                            <p class="p-grey" style="margin-bottom: 5px;">Rate - ${results.rate}</p>
                                            <p class="p-grey" style="margin-bottom: 5px;">Age - ${results.age} years old</p>
                                            <div id="sk${results.user_id}" class="skills-button" style="margin-top: 5px;
                                            margin-bottom: 5px;">

                                            </div>

                                        </div>


                                    </div>

                                `
                                );

                                var services = [];
                                services = results.services_offer.split(",");
                                // console.log(services);
                                var ul = document.getElementById(`sk${results.user_id}`);
                                for (let i = 0; i < services.length; i++) {
                                    var li = document.createElement("button");
                                    li.setAttribute('id', services[i]);
                                    li.appendChild(document.createTextNode(services[i]));
                                    ul.appendChild(li);
                                }

                            }
                        }

                    }

                    setTimeout(function() {
                        document.getElementById("freelancer-lists").insertAdjacentHTML(
                            "beforeend",
                            `
                                    <div class="col-2" id="page-btn">
    
                                        <div style="width: 70%;">
                                            <p style="color:#555;font-size: 14px;">${rowCount} out of <span id="total-count">${total_count_search} </span> Freelancers</p>
                                        </div>
    
                                        <div class="controls-div">
                                            <button id="prev-page" class="control-btn"> &#10094; Previous </button>
                                            <p style="color:#555;font-size: 20px;
                                                margin-left: 10px;margin-right: 10px;"><u>${current_search_page}</u></p>
                                            <button id="next-page" class="control-btn"> Next &#10095;</button>
                                        </div>
    
                                    </div>
    
                            `
                        );
                        if (current_search_page === 1) {
                            $('#prev-page').attr("style", "opacity:0;");
                        } else {
                            $('#prev-page').attr("style", "opacity:1;");
                        }

                        $('#next-page').on('click', function(event) {
                            $('#freelancer-lists').html('');
                            var new_page = ++current_search_page;
                            load_data(new_page, "search");
                            current_search_page = new_page;
                        });

                        $('#prev-page').on('click', function(event) {
                            $('#freelancer-lists').html('');
                            var new_page = --current_search_page;
                            if (new_page === 0) {
                                load_data(1);
                                current_search_page = 1;
                                $('#prev-page').attr("style", "display:none;");
                            } else {
                                load_data(new_page);
                                current_search_page = new_page;
                            }
                        });
                    }, 100);
                }
            })
            // }
    });

    //************ modal close events ************//
    var modal1 = document.getElementById('id01');
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }

    //************ view profile ************//
    $(document).on('click', '.view-profile', function() {
        var user_id_profile = $(this).attr("id");
        window.location.href = "../view-profile.php?uid=" + user_id_profile.substr(4);
        // alert(user_id_profile)
    });

    //************ remove saved freelancer ************//
    $(document).on('click', '.remove-btn', function() {
        var user_id_profile = $(this).attr("id");
        var xhttp = new XMLHttpRequest();
        xhttp.open(
            "DELETE",
            "../../../../backend/api/users/remove_saved_freelancer.php"
        );
        xhttp.send(JSON.stringify({ freelancer_id: user_id_profile }));
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let results = JSON.parse(this.response);
                load_data(1);
                current_page = 1;
                current_search_page = 1;
                $("#id01").fadeIn();
            } else if (this.readyState == 4 && this.status == 400) {}
        }
    });

    $(document).on('click', '.logout', function(e) {
        var xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../../../backend/api/users/logout.php"
        );
        xhttp.send();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let results = JSON.parse(this.response);
                console.log(results);
                window.location.href = "../../../../frontend/";
            } else if (this.readyState == 4 && this.status == 500) {

            } else if (this.readyState == 4 && this.status == 404) {}
        };
    })
}