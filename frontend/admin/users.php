


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link rel="shortcut icon" href="../assets/images/index/my-icon.ico">

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/users.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>eHireMo</h1>
        </div>
        <ul>
            <li><img src="assets/images/dashboard (2).png" style="margin-right: 10px;" />Dashboard</li>
            <li><img src="assets/images/users.png" style="margin-right: 10px; width: 32px;height: 32px;" />Users</li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button type="submit"><img src="assets/images/search.png" alt="" /></button>
                </div>
                <div class="user">
                    <div class="img-case">
                        <img src="assets/images/user.png" alt="" />
                    </div>
                    <img src="assets/images/notifications.png" style="width:40px;height:40px;" />
                    <img src="assets/images/logout.png" style="width:40px;height:40px;" />
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-1">
                <div class="for-validation">
                    <div class="title">
                        <h2>For validation</h2>
                    </div>
                    <div style="text-align: left;display: flex;flex-direction: row;margin-top: 20px;">
                        <div style="width: 40%;height: 300px;align-items: center;">
                            <div class="slider-img" style="border: 1px solid rgb(170,170,170); width: 250px;height: 280px;margin: auto;">
                                <a id="large-img" href="" target="_blank">
                                <img id="id-container" src="" 
                                style="width: 100%;height:100%;"/>
                                </a>
                            </div>
                            <div style="text-align:center;width: 100%;">
                                <label style="font-size: 28px;cursor: pointer;" id="prev-id"> < </label>
                                <label style="font-size: 28px;cursor: pointer;" id="next-id"> > </label>
                            </div>

                        </div>

                        <div style="width: 60%;height: 300px;">
                            <div class="wrapper">
                                <label>Name : </label>
                                <input id="input-name" type="text" placeholder="">
                            </div>
                            <div class="wrapper">
                                <label>Gender : </label>
                                <input id="input-gender" type="text" placeholder="">
                            </div>
                            <div class="wrapper">
                                <label>Birthday : </label>
                                <input id="input-birthday" type="text" placeholder="">
                            </div>
                            <div class="wrapper">
                                <label>Address : </label>
                                <input id="input-address" type="text" placeholder="">
                            </div>

                            <div class="wrapper" style="justify-content: flex-end;">
                                <button id="btn-deny" >Deny</button>
                                <button id="btn-approve" >Approve</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-2">
                <div class="latest-users">
                    <div class="title">
                        <h2>Pending approval</h2>
                    </div>
                    <div id="users-table">

                    </div>
                    <!-- <table >
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined on</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td><a href="" class="btn">Block</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td><a href="" class="btn">Block</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td><a href="" class="btn">Block</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td><a href="" class="btn">Block</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td><a href="" class="btn">Block</a></td>
                        </tr>
                    </table> -->
                </div>

            </div>
        </div>
    </div>
</body>

<!----- script ------>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/users.js"></script>

</html>