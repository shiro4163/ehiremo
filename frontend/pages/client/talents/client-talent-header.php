<!--start navbar-->
<div class="navbar">

    <div class="logo">
        <h1> <a href="#" title="" style="text-decoration: none;color:white"> e<span style="font-weight: bold;">H</span>ire<span style="font-weight: bold;">M</span>o </a>
        </h1>
    </div>

    <nav>

    </nav>

    <div class="menuItemsRight">
        <ul>
            <li>
                <div class="dropdown-jobs">
                    <a href="#" title="">Jobs</a>
                    <div class="dropdown-content-jobs">
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;" href="../jobs/post-job.php">Post a job</a>
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;" href="../jobs/my-job-post.php">My Job Post</a>
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;" href="../jobs/all-job-post.php">All Job Post</a>
                    </div>
                </div>
            </li>



            <li>
                <div class="dropdown-talent">
                    <a href="#" title="">Freelancers</a>
                    <div class="dropdown-content-talent">
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;" href="my-hires.php">My Hires</a>
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;" href="saved-talents.php">Saved Freelancers</a>
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;" href="browse-talents.php">Browse Freelancers</a>
                    </div>
                </div>
            </li>
            <li><a href="../messages.php">Messages</a></li>
            <li>
                <a href="#" title="">
                    <img alt="" src="../assets/images/bell.png" width="22" style="margin-bottom: -4px;" />
                </a>
            </li>
            <li>
                <a href="#" title="">
                    <img alt="" src="../assets/images/help.png" width="22" style="margin-bottom: -4px;" />
                </a>
            </li>
            <li>
                <div class="dropdown-profile">
                    <a href="#" title="">
                        <img alt="" id="web-profile-picture" src="../assets/images/people.png" style="border-radius:50%;
                        margin-bottom: -10px;height:32px;width:32px;" />
                    </a>
                    <div class="dropdown-content-profile">
                        <a id="web-name" style="color:#555;font-size: 14px;padding: 8px 10px;
                            text-decoration: none; display: block;" href="../profile.php"></a>
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;" href="../profile.php">Profile</a>
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;" href="../settings.php">Settings</a>
                        <a style="color:#555;font-size: 14px;padding: 8px 10px;
                    text-decoration: none;
                    display: block;cursor:pointer;" class="logout">Logout</a>
                    </div>
                </div>


            </li>
        </ul>
    </div>

    <img alt="" src="../../../assets/images/menu.png" id="menu-icon" onclick="openNav()">
</div>
<!--end navbar-->

<div id="mySidenav" class="sidenav">
    <div style="text-align: left;">
        <h1 class="logo-mobile">e<span style="font-weight: bold;">H</span>ire<span style="font-weight: bold;">M</span>o</h1>
    </div>

    <div style="padding-top: 30px;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style="display:flex;flex-direction: row;
    padding-left: 30px;padding-bottom: 20px;">
            <img alt="" id="mobile-profile-picture" src="../assets/images/people.png" width="52" style="border-radius:50%; width:52px;height:52px;" />
            <div style="display:flex;flex-direction: column;margin-left: 10px;">
                <p id="mobile-name" style="font-size: 15px;color:#29e411;margin-top: 8px;">
                </p>
                <p style="font-size: 13px;color:#fff;">Client</p>
            </div>
        </div>

        <p style="font-size: 16px;margin-bottom: 16px;
    padding-left: 32px;padding-right: 32px;">Jobs
            <img alt="" id="drop-jobs" src="../assets/images/dropdown-icon.png" width="24" style="float:right" />
        <div id="jobs-mobile-dropdown">
            <a href="../jobs/post-job.php">Post a job</a>
            <a href="../jobs/my-job-post.php">My job post </a>
            <a href="../jobs/all-job-post.php">All job post </a>
        </div>
        </p>
        <p style="font-size: 16px;margin-bottom: 16px;
    padding-left: 32px;padding-right: 32px;">Freelancers
            <img alt="" id="drop-talent" src="../assets/images/dropdown-icon.png" width="24" style="float:right" />
        <div id="talent-mobile-dropdown">
            <a href="my-hires.php">My Hires</a>
            <a href="saved-talents.php">Saved Freelancers</a>
            <a href="browse-talents.php">Browse Freelancers</a>
        </div>
        </p>



        <a href="../messages.php">Messages
            <img alt="" src="../assets/images/message.png" width="24" style="float:right" />
        </a>
        <a href="#" title="">Notifications
            <img alt="" src="../assets/images/bell.png" width="24" style="float:right" />
        </a>
        <a href="#" title="">Help
            <img alt="" src="../assets/images/help.png" width="24" style="float:right" />
        </a>
        <a href="../profile.php">Profile
            <img alt="" src="../assets/images/profile.png" width="24" style="float:right" />
        </a>
        <a href="../settings.php">Settings
            <img alt="" src="../assets/images/settings.png" width="24" style="float:right" />
        </a>
        <a class="logout">Logout
            <img alt="" src="../assets/images/logout.png" width="24" style="float:right" />
        </a>
    </div>

</div>