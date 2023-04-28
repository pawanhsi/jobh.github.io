<?php include('includes/config.php'); ?>
<?php include('include/header.php'); ?>

<div class="pxp-dashboard-side-panel d-none d-lg-block">
    <div class="pxp-logo">
        <a href="index.php" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
    </div>

    <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
        <div class="pxp-dashboard-side-label">Admin tools</div>
        <ul class="list-unstyled">
            <li><a href="candidate-dashboard.php"><span class="fa fa-home"></span>Dashboard</a></li>
            <li><a href="candidate-dashboard-profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
            <li><a href="candidate-dashboard-applications.php"><span class="fa fa-file-text-o"></span>Apllications</a></li>
            <li><a href="candidate-dashboard-fav-jobs.php"><span class="fa fa-heart-o"></span>Favourite Jobs</a></li>
            <li class="pxp-active"><a href="candidate-dashboard-password.php"><span class="fa fa-lock"></span>Change Password</a></li>
        </ul>
        <div class="pxp-dashboard-side-label mt-3 mt-lg-4">Insights</div>
        <ul class="list-unstyled">
            <li>
                <a href="candidate-dashboard-inbox.php" class="d-flex justify-content-between align-items-center">
                    <div><span class="fa fa-envelope-o"></span>Inbox</div>
                    <span class="badge rounded-pill">14</span>
                </a>
            </li>
            <li>
                <a href="candidate-dashboard-notifications.php" class="d-flex justify-content-between align-items-center">
                    <div><span class="fa fa-bell-o"></span>Notifications</div>
                    <span class="badge rounded-pill">5</span>
                </a>
            </li>
        </ul>
    </nav>

    <nav class="pxp-dashboard-side-user-nav-container pxp-is-candidate">
        <div class="pxp-dashboard-side-user-nav">
            <div class="dropdown pxp-dashboard-side-user-nav-dropdown dropup">
                <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                    <div class="pxp-dashboard-side-user-nav-avatar pxp-cover" style="background-image: url(assets/images/avatar-1.jpg);"></div>
                    <div class="pxp-dashboard-side-user-nav-name">Derek Cotner</div>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="candidate-dashboard.php">Dashboard</a></li>
                    <li><a class="dropdown-item" href="candidate-dashboard-profile.php">Edit profile</a></li>
                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="pxp-dashboard-content">
    <div class="pxp-dashboard-content-header pxp-is-candidate">
        <div class="pxp-nav-trigger navbar pxp-is-dashboard d-lg-none">
            <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav" aria-controls="pxpMobileNav">
                <div class="pxp-line-1"></div>
                <div class="pxp-line-2"></div>
                <div class="pxp-line-3"></div>
            </a>
            <div class="offcanvas offcanvas-start pxp-nav-mobile-container pxp-is-dashboard pxp-is-candidate" tabindex="-1" id="pxpMobileNav">
                <div class="offcanvas-header">
                    <div class="pxp-logo">
                        <a href="index.php" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
                    </div>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="pxp-nav-mobile">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="pxp-dropdown-header">Admin tools</li>
                            <li class="nav-item"><a href="candidate-dashboard.php"><span class="fa fa-home"></span>Dashboard</a></li>
                            <li class="nav-item"><a href="candidate-dashboard-profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                            <li class="nav-item"><a href="candidate-dashboard-applications.php"><span class="fa fa-file-text-o"></span>Apllications</a></li>
                            <li class="nav-item"><a href="candidate-dashboard-fav-jobs.php"><span class="fa fa-heart-o"></span>Favourite Jobs</a></li>
                            <li class="nav-item"><a href="candidate-dashboard-password.php"><span class="fa fa-lock"></span>Change Password</a></li>
                            <li class="pxp-dropdown-header mt-4">Insights</li>
                            <li class="nav-item">
                                <a href="candidate-dashboard-inbox.php" class="d-flex justify-content-between align-items-center">
                                    <div><span class="fa fa-envelope-o"></span>Inbox</div>
                                    <span class="badge rounded-pill">14</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="candidate-dashboard-notifications.php" class="d-flex justify-content-between align-items-center">
                                    <div><span class="fa fa-bell-o"></span>Notifications</div>
                                    <span class="badge rounded-pill">5</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <nav class="pxp-user-nav pxp-on-light">
            <div class="dropdown pxp-user-nav-dropdown pxp-user-notifications">
                <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="fa fa-bell-o"></span>
                    <div class="pxp-user-notifications-counter">5</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="candidate-dashboard-notifications.php"><strong>Artistre Studio</strong> viewed your profile. <span class="pxp-is-time">20m</span></a></li>
                    <li><a class="dropdown-item" href="candidate-dashboard-notifications.php"><strong>CoderBotics</strong> sent you a message. <span class="pxp-is-time">1h</span></a></li>
                    <li><a class="dropdown-item" href="candidate-dashboard-notifications.php"><strong>Illuminate Studio</strong> viewed your profile. <span class="pxp-is-time">2h</span></a></li>
                    <li><a class="dropdown-item" href="candidate-dashboard-notifications.php"><strong>Syspresoft</strong> sent you a message. <span class="pxp-is-time">5h</span></a></li>
                    <li><a class="dropdown-item" href="candidate-dashboard-notifications.php"><strong>Artistre Studio</strong> viewed your profile. <span class="pxp-is-time">1d</span></a></li>
                    <li><a class="dropdown-item" href="candidate-dashboard-notifications.php"><strong>Illuminate Studio</strong> viewed your profile. <span class="pxp-is-time">3d</span></a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item pxp-link" href="candidate-dashboard-notifications.php">Read All</a></li>
                </ul>
            </div>
            <div class="dropdown pxp-user-nav-dropdown">
                <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                    <div class="pxp-user-nav-avatar pxp-cover" style="background-image: url(assets/images/avatar-1.jpg);"></div>
                    <div class="pxp-user-nav-name d-none d-md-block">Derek Cotner</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="candidate-dashboard.php">Dashboard</a></li>
                    <li><a class="dropdown-item" href="candidate-dashboard-profile.php">Edit profile</a></li>
                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="pxp-dashboard-content-details">
        <h1>Change Password</h1>
        <p class="pxp-text-light">Choose a new account password.</p>

        <form>
            <div class="row mt-4 mt-lg-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="pxp-candidate-old-password" class="form-label">Old password</label>
                        <input type="password" id="pxp-candidate-old-password" class="form-control" placeholder="Enter old password">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="pxp-candidate-new-password" class="form-label">New password</label>
                        <input type="password" id="pxp-candidate-new-password" class="form-control" placeholder="Enter new password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="pxp-candidate-new-password-repeat" class="form-label">New password repeat</label>
                        <input type="password" id="pxp-candidate-new-password-repeat" class="form-control" placeholder="Repeat new password">
                    </div>
                </div>
            </div>

            <div class="mt-4 mt-lg-5">
                <button class="btn rounded-pill pxp-section-cta">Save New Password</button>
            </div>
        </form>
    </div>

    <?php include('include/footer.php'); ?>