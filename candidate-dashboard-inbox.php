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
            <li><a href="candidate-dashboard-password.php"><span class="fa fa-lock"></span>Change Password</a></li>
        </ul>
        <div class="pxp-dashboard-side-label mt-3 mt-lg-4">Insights</div>
        <ul class="list-unstyled">
            <li class="pxp-active">
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
        <h1>Inbox</h1>
        <p class="pxp-text-light">Keep in touch with companies.</p>

        <div class="row mt-4 mt-lg-5">
            <div class="col-xxl-4">
                <div class="pxp-dashboard-inbox-search-form">
                    <div class="input-group">
                        <span class="input-group-text"><span class="fa fa-search"></span></span>
                        <input type="text" class="form-control" placeholder="Search messages...">
                    </div>
                </div>

                <div class="mt-3 mt-lg-4 pxp-dashboard-inbox-list">
                    <ul class="list-unstyled">
                        <li class="pxp-active">
                            <a href="#" class="pxp-dashboard-inbox-list-item">
                                <div class="pxp-dashboard-inbox-list-item-top">
                                    <div class="pxp-dashboard-inbox-list-item-left">
                                        <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div>
                                        <div class="pxp-dashboard-inbox-list-item-name ms-2">Artistre Studio</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-list-item-right">
                                        <div class="pxp-dashboard-inbox-list-item-time">13:00</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="pxp-dashboard-inbox-list-item-text pxp-text-light">Replacing meaningful content with placeholder text allows...</div>
                                    <div class="pxp-dashboard-inbox-list-item-no ms-3"><span class="badge rounded-pill">3</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pxp-dashboard-inbox-list-item">
                                <div class="pxp-dashboard-inbox-list-item-top">
                                    <div class="pxp-dashboard-inbox-list-item-left">
                                        <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-2.png);"></div>
                                        <div class="pxp-dashboard-inbox-list-item-name ms-2">Craftgenics</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-list-item-right">
                                        <div class="pxp-dashboard-inbox-list-item-time">06 Oct</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="pxp-dashboard-inbox-list-item-text pxp-text-light">In publishing and graphic design, lorem ipsum is a filler text or...</div>
                                    <div class="pxp-dashboard-inbox-list-item-no ms-3"><span class="badge rounded-pill">3</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pxp-dashboard-inbox-list-item">
                                <div class="pxp-dashboard-inbox-list-item-top">
                                    <div class="pxp-dashboard-inbox-list-item-left">
                                        <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-3.png);"></div>
                                        <div class="pxp-dashboard-inbox-list-item-name ms-2">Illuminate Studio</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-list-item-right">
                                        <div class="pxp-dashboard-inbox-list-item-time">07 Oct</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="pxp-dashboard-inbox-list-item-text pxp-text-light">In publishing and graphic design, lorem ipsum is a filler text or...</div>
                                    <div class="pxp-dashboard-inbox-list-item-no ms-3"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pxp-dashboard-inbox-list-item">
                                <div class="pxp-dashboard-inbox-list-item-top">
                                    <div class="pxp-dashboard-inbox-list-item-left">
                                        <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-4.png);"></div>
                                        <div class="pxp-dashboard-inbox-list-item-name ms-2">Syspresoft</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-list-item-right">
                                        <div class="pxp-dashboard-inbox-list-item-time">08 Oct</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="pxp-dashboard-inbox-list-item-text pxp-text-light">In publishing and graphic design, lorem ipsum is a filler text or...</div>
                                    <div class="pxp-dashboard-inbox-list-item-no ms-3"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pxp-dashboard-inbox-list-item">
                                <div class="pxp-dashboard-inbox-list-item-top">
                                    <div class="pxp-dashboard-inbox-list-item-left">
                                        <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-5.png);"></div>
                                        <div class="pxp-dashboard-inbox-list-item-name ms-2">Gramware</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-list-item-right">
                                        <div class="pxp-dashboard-inbox-list-item-time">13:00</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="pxp-dashboard-inbox-list-item-text pxp-text-light">Replacing meaningful content with placeholder text allows...</div>
                                    <div class="pxp-dashboard-inbox-list-item-no ms-3"><span class="badge rounded-pill">3</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pxp-dashboard-inbox-list-item">
                                <div class="pxp-dashboard-inbox-list-item-top">
                                    <div class="pxp-dashboard-inbox-list-item-left">
                                        <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-6.png);"></div>
                                        <div class="pxp-dashboard-inbox-list-item-name ms-2">Bitbytech</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-list-item-right">
                                        <div class="pxp-dashboard-inbox-list-item-time">06 Oct</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="pxp-dashboard-inbox-list-item-text pxp-text-light">In publishing and graphic design, lorem ipsum is a filler text or...</div>
                                    <div class="pxp-dashboard-inbox-list-item-no ms-3"><span class="badge rounded-pill">3</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pxp-dashboard-inbox-list-item">
                                <div class="pxp-dashboard-inbox-list-item-top">
                                    <div class="pxp-dashboard-inbox-list-item-left">
                                        <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-7.png);"></div>
                                        <div class="pxp-dashboard-inbox-list-item-name ms-2">CoderBotics</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-list-item-right">
                                        <div class="pxp-dashboard-inbox-list-item-time">07 Oct</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="pxp-dashboard-inbox-list-item-text pxp-text-light">In publishing and graphic design, lorem ipsum is a filler text or...</div>
                                    <div class="pxp-dashboard-inbox-list-item-no ms-3"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pxp-dashboard-inbox-list-item">
                                <div class="pxp-dashboard-inbox-list-item-top">
                                    <div class="pxp-dashboard-inbox-list-item-left">
                                        <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div>
                                        <div class="pxp-dashboard-inbox-list-item-name ms-2">Artistre Studio</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-list-item-right">
                                        <div class="pxp-dashboard-inbox-list-item-time">08 Oct</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-between">
                                    <div class="pxp-dashboard-inbox-list-item-text pxp-text-light">In publishing and graphic design, lorem ipsum is a filler text or...</div>
                                    <div class="pxp-dashboard-inbox-list-item-no ms-3"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="pxp-dashboard-inbox-messages-container">
                    <div class="pxp-dashboard-inbox-messages-header">
                        <div class="pxp-dashboard-inbox-list-item-left">
                            <div class="pxp-dashboard-inbox-list-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div>
                            <div class="pxp-dashboard-inbox-list-item-name ms-2">Artistre Studio</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="pxp-dashboard-inbox-list-item-options">
                                <button title="Delete conversation"><span class="fa fa-trash-o"></span></button>
                            </div>
                            <button class="btn rounded-pill pxp-dashboard-inbox-messages-close-btn d-inline-block d-xxl-none"><span class="fa fa-angle-left"></span> Back</button>
                        </div>
                    </div>
                    <div class="pxp-dashboard-inbox-messages-content">
                        <div class="pxp-dashboard-inbox-messages-item">
                            <div class="row justify-content-end">
                                <div class="col-7">
                                    <div class="pxp-dashboard-inbox-messages-item-header flex-row-reverse">
                                        <div class="pxp-dashboard-inbox-messages-item-avatar pxp-cover" style="background-image: url(assets/images/avatar-1.jpg);"></div>
                                        <div class="pxp-dashboard-inbox-messages-item-name me-2">Scott Goodwin</div>
                                        <div class="pxp-dashboard-inbox-messages-item-time pxp-text-light me-3">13:34</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-messages-item-message pxp-is-other mt-2">
                                        Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pxp-dashboard-inbox-messages-item mt-4">
                            <div class="row">
                                <div class="col-7">
                                    <div class="pxp-dashboard-inbox-messages-item-header">
                                        <div class="pxp-dashboard-inbox-messages-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div>
                                        <div class="pxp-dashboard-inbox-messages-item-name ms-2">Artistre Studio</div>
                                        <div class="pxp-dashboard-inbox-messages-item-time pxp-text-light ms-3">13:34</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-messages-item-message pxp-is-self mt-2">
                                        Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pxp-dashboard-inbox-messages-item">
                            <div class="row justify-content-end">
                                <div class="col-7">
                                    <div class="pxp-dashboard-inbox-messages-item-header flex-row-reverse">
                                        <div class="pxp-dashboard-inbox-messages-item-avatar pxp-cover" style="background-image: url(assets/images/avatar-1.jpg);"></div>
                                        <div class="pxp-dashboard-inbox-messages-item-name me-2">Scott Goodwin</div>
                                        <div class="pxp-dashboard-inbox-messages-item-time pxp-text-light me-3">13:34</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-messages-item-message pxp-is-other mt-2">
                                        Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pxp-dashboard-inbox-messages-item mt-4">
                            <div class="row">
                                <div class="col-7">
                                    <div class="pxp-dashboard-inbox-messages-item-header">
                                        <div class="pxp-dashboard-inbox-messages-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div>
                                        <div class="pxp-dashboard-inbox-messages-item-name ms-2">Artistre Studio</div>
                                        <div class="pxp-dashboard-inbox-messages-item-time pxp-text-light ms-3">13:34</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-messages-item-message pxp-is-self mt-2">
                                        Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pxp-dashboard-inbox-messages-item">
                            <div class="row justify-content-end">
                                <div class="col-7">
                                    <div class="pxp-dashboard-inbox-messages-item-header flex-row-reverse">
                                        <div class="pxp-dashboard-inbox-messages-item-avatar pxp-cover" style="background-image: url(assets/images/avatar-1.jpg);"></div>
                                        <div class="pxp-dashboard-inbox-messages-item-name me-2">Scott Goodwin</div>
                                        <div class="pxp-dashboard-inbox-messages-item-time pxp-text-light me-3">13:34</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-messages-item-message pxp-is-other mt-2">
                                        Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pxp-dashboard-inbox-messages-item mt-4">
                            <div class="row">
                                <div class="col-7">
                                    <div class="pxp-dashboard-inbox-messages-item-header">
                                        <div class="pxp-dashboard-inbox-messages-item-avatar pxp-cover" style="background-image: url(assets/images/company-logo-1.png);"></div>
                                        <div class="pxp-dashboard-inbox-messages-item-name ms-2">Artistre Studio</div>
                                        <div class="pxp-dashboard-inbox-messages-item-time pxp-text-light ms-3">13:34</div>
                                    </div>
                                    <div class="pxp-dashboard-inbox-messages-item-message pxp-is-self mt-2">
                                        Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pxp-dashboard-inbox-messages-footer">
                        <div class="pxp-dashboard-inbox-messages-footer-field">
                            <input type="text" class="form-control" placeholder="Type your message here...">
                        </div>
                        <div class="pxp-dashboard-inbox-messages-footer-btn">
                            <button class="btn rounded-pill pxp-section-cta">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php'); ?>