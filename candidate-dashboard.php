<?php include('includes/config.php'); ?>
<?php include('include/header.php'); ?>

<div class="pxp-dashboard-side-panel d-none d-lg-block">
    <div class="pxp-logo">
        <a href="index.php" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
    </div>

    <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
        <div class="pxp-dashboard-side-label">Admin tools</div>
        <ul class="list-unstyled">
            <li class="pxp-active"><a href="candidate-dashboard.php"><span class="fa fa-home"></span>Dashboard</a></li>
            <li><a href="candidate-dashboard-profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
            <li><a href="candidate-dashboard-applications.php"><span class="fa fa-file-text-o"></span>Apllications</a></li>
            <li><a href="candidate-dashboard-fav-jobs.php"><span class="fa fa-heart-o"></span>Favourite Jobs</a></li>
            <li><a href="candidate-dashboard-password.php"><span class="fa fa-lock"></span>Change Password</a></li>
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
        <h1>Dashboard</h1>
        <p class="pxp-text-light">Welcome to Jobster!</p>

        <div class="row mt-4 mt-lg-5 align-items-center">
            <div class="col-sm-6 col-xxl-3">
                <div class="pxp-dashboard-stats-card bg-primary bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-primary">
                        <span class="fa fa-file-text-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">13</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Job applications</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="pxp-dashboard-stats-card bg-success bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-success">
                        <span class="fa fa-user-circle-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">312</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Profile visits</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="pxp-dashboard-stats-card bg-warning bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-warning">
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">14</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Unread messages</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="pxp-dashboard-stats-card bg-danger bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-danger">
                        <span class="fa fa-bell-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">5</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Notifications</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mt-lg-5">
            <div class="col-xl-6">
                <h2>Profile Visits</h2>
                <div class="mt-3 mt-lg-4 pxp-dashboard-chart-container">
                    <div class="row justify-content-between align-content-center mb-4">
                        <div class="col-auto">
                            <span class="pxp-dashboard-chart-value">154</span><span class="pxp-dashboard-chart-percent text-success"><span class="fa fa-long-arrow-up"></span> 34%</span><span class="pxp-dashboard-chart-vs">vs last 7 days</span>
                        </div>
                        <div class="col-auto">
                            <select class="form-select">
                                <option value="-7 days">Last 7 days</option>
                                <option value="-30 days">Last 30 days</option>
                                <option value="-60 days">Last 60 days</option>
                                <option value="-90 days">Last 90 days</option>
                                <option value="-12 months">Last 12 months</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="pxp-candidate-dashboard-visits-chart"></canvas>
                </div>
            </div>
            <div class="col-xl-6">
                <h2 class="mt-4 mt-lg-5 mt-xl-0">Applications</h2>
                <div class="mt-3 mt-lg-4 pxp-dashboard-chart-container">
                    <div class="row justify-content-between align-content-center mb-4">
                        <div class="col-auto">
                            <span class="pxp-dashboard-chart-value">280</span><span class="pxp-dashboard-chart-percent text-success"><span class="fa fa-long-arrow-up"></span> 56%</span><span class="pxp-dashboard-chart-vs">vs last 7 days</span>
                        </div>
                        <div class="col-auto">
                            <select class="form-select">
                                <option value="-7 days">Last 7 days</option>
                                <option value="-30 days">Last 30 days</option>
                                <option value="-60 days">Last 60 days</option>
                                <option value="-90 days">Last 90 days</option>
                                <option value="-12 months">Last 12 months</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="pxp-candidate-dashboard-app-chart"></canvas>
                </div>
            </div>
        </div>

        <div class="row mt-4 mt-lg-5">
            <div class="col-xxl-6">
                <h2>Recent Notifications</h2>
                <div class="pxp-candidate-dashboard-notifications">
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-user-circle-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Artistre Studio</a> viewed your profile.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">20m ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-envelope-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Craftgenics</a> sent you a message.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">1h ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-user-circle-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Illuminate Studio</a> viewed your profile.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">3h ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-envelope-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Syspresoft</a> you sent a message.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">1d ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-user-circle-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Adobe Corporation</a> viewed your profile.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">20m ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-envelope-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Gramware</a> sent you a message.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">1h ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-user-circle-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Bitbytech</a> viewed your profile.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">3h ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-envelope-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">CoderBotics</a> you sent a message.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">1d ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-user-circle-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Artistre Studio</a> viewed your profile.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">20m ago</div>
                    </div>
                    <div class="pxp-candidate-dashboard-notifications-item mb-3">
                        <div class="pxp-candidate-dashboard-notifications-item-left">
                            <div class="pxp-candidate-dashboard-notifications-item-type"><span class="fa fa-envelope-o"></span></div>
                            <div class="pxp-candidate-dashboard-notifications-item-message">
                                <a href="#">Gramware</a> sent you a message.
                            </div>
                        </div>
                        <div class="pxp-candidate-dashboard-notifications-item-right">1h ago</div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <h2 class="mt-4 mt-lg-5 mt-xxl-0">Recent Messages</h2>
                <div class="pxp-candidate-dashboard-messages">
                    <div class="pxp-candidate-dashboard-messages-item mb-3">
                        <div class="pxp-candidate-dashboard-messages-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div>
                        <div class="pxp-candidate-dashboard-messages-item-details ms-3">
                            <div class="pxp-candidate-dashboard-messages-item-name">Artistre Studio</div>
                            <div class="pxp-candidate-dashboard-messages-item-date pxp-text-light">Oct 6, 2021 at 8:04 pm</div>
                            <p class="mt-1 mb-0">Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.</p>
                        </div>
                    </div>
                    <div class="pxp-candidate-dashboard-messages-item mb-3">
                        <div class="pxp-candidate-dashboard-messages-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-2.png);"></div>
                        <div class="pxp-candidate-dashboard-messages-item-details ms-3">
                            <div class="pxp-candidate-dashboard-messages-item-name">Craftgenics</div>
                            <div class="pxp-candidate-dashboard-messages-item-date pxp-text-light">Oct 6, 2021 at 8:04 pm</div>
                            <p class="mt-1 mb-0">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation.</p>
                        </div>
                    </div>
                    <div class="pxp-candidate-dashboard-messages-item mb-3">
                        <div class="pxp-candidate-dashboard-messages-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-3.png);"></div>
                        <div class="pxp-candidate-dashboard-messages-item-details ms-3">
                            <div class="pxp-candidate-dashboard-messages-item-name">Illuminate Studio</div>
                            <div class="pxp-candidate-dashboard-messages-item-date pxp-text-light">Oct 6, 2021 at 8:04 pm</div>
                            <p class="mt-1 mb-0">Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.</p>
                        </div>
                    </div>
                    <div class="pxp-candidate-dashboard-messages-item mb-3">
                        <div class="pxp-candidate-dashboard-messages-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-4.png);"></div>
                        <div class="pxp-candidate-dashboard-messages-item-details ms-3">
                            <div class="pxp-candidate-dashboard-messages-item-name">Syspresoft</div>
                            <div class="pxp-candidate-dashboard-messages-item-date pxp-text-light">Oct 6, 2021 at 8:04 pm</div>
                            <p class="mt-1 mb-0">Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 mt-lg-5">
            <h2>Recent Job Apllications</h2>
            <div class="table-responsive">
                <table class="table align-middle">
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Senior Editor</div>
                            <div class="pxp-candidate-dashboard-job-company">Artistre Studio</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Marketing & Communication</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-2.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Software Engineering Team Leader</div>
                            <div class="pxp-candidate-dashboard-job-company">Craftgenics</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Project Management</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>San Francisco, CA</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-3.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Techincal Support Engineer</div>
                            <div class="pxp-candidate-dashboard-job-company">Illuminate Studio</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Customer Service</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-4.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Javascript Developer</div>
                            <div class="pxp-candidate-dashboard-job-company">Syspresoft</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Software Engineering</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>San Francisco, CA</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-5.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Technical Writer</div>
                            <div class="pxp-candidate-dashboard-job-company">Gramware</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Business Development</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-6.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Human Resources Coordinator</div>
                            <div class="pxp-candidate-dashboard-job-company">Bitbytech</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Human Resources</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>San Francisco, CA</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-7.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Fullstack Web Developer</div>
                            <div class="pxp-candidate-dashboard-job-company">CoderBotics</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Software Engineering</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Senior Editor</div>
                            <div class="pxp-candidate-dashboard-job-company">Artistre Studio</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Marketing & Communication</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-2.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Software Engineering Team Leader</div>
                            <div class="pxp-candidate-dashboard-job-company">Craftgenics</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Project Management</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>San Francisco, CA</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(assets/images/company-logo-3.png);"></div></td>
                        <td style="width: 25%;">
                            <div class="pxp-candidate-dashboard-job-title">Techincal Support Engineer</div>
                            <div class="pxp-candidate-dashboard-job-company">Illuminate Studio</div>
                        </td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-category">Customer Service</div></td>
                        <td style="width: 25%;"><div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe"></span>London, UK</div></td>
                        <td style="width: 10%;"><div class="pxp-candidate-dashboard-job-type">Full-time</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="View job details"><span class="fa fa-eye"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <?php include('include/footer.php'); ?>