<?php include('includes/config.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<section class="pxp-page-header-simple" style="background-color: var(--pxpSecondaryColor);">
    <div class="pxp-container">
        <h1 class="text-center">Search Candidates</h1>
        <div class="pxp-hero-subtitle pxp-text-light text-center">Work with the most talented candidates in the world</div>
    </div>
</section>

<section class="mt-100">
    <div class="pxp-container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 col-xxl-3">
                <div class="pxp-candidates-list-side-filter">
                    <div class="pxp-list-side-filter-header d-flex d-lg-none">
                        <div class="pxp-list-side-filter-header-label">Filter Jobs</div>
                        <a role="button"><span class="fa fa-sliders"></span></a>
                    </div>
                    <div class="mt-4 mt-lg-0 d-lg-block pxp-list-side-filter-panel">
                        <h3>Search by Keywords</h3>
                        <div class="mt-2 mt-lg-3">
                            <div class="input-group">
                                <span class="input-group-text"><span class="fa fa-search"></span></span>
                                <input type="text" class="form-control" placeholder="Candidate Name or Keyword">
                            </div>
                        </div>

                        <h3 class="mt-3 mt-lg-4">Location</h3>
                        <div class="mt-2 mt-lg-3">
                            <div class="input-group">
                                <span class="input-group-text"><span class="fa fa-globe"></span></span>
                                <input type="text" class="form-control" placeholder="Enter location">
                            </div>
                        </div>

                        <h3 class="mt-3 mt-lg-4">Category</h3>
                        <div class="mt-2 mt-lg-3">
                            <div class="input-group">
                                <span class="input-group-text"><span class="fa fa-folder-o"></span></span>
                                <select class="form-select">
                                    <option selected>All Industries</option>
                                    <option>Business Development</option>
                                    <option>Construction</option>
                                    <option>Customer Service</option>
                                    <option>Finance</option>
                                    <option>Healthcare</option>
                                    <option>Human Resources</option>
                                    <option>Marketing & Communication</option>
                                    <option>Project Management</option>
                                    <option>Software Engineering</option>
                                </select>
                            </div>
                        </div>

                        <h3 class="mt-3 mt-lg-4">Experience</h3>
                        <div class="list-group mt-2 mt-lg-3">
                            <label class="list-group-item d-flex justify-content-between align-items-center pxp-checked">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="" checked>
                                    0 - 3 years
                                </span>
                                <span class="badge rounded-pill">34</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3 pxp-checked">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="" checked>
                                    3 - 5 years
                                </span>
                                <span class="badge rounded-pill">22</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="">
                                    6 - 10 years
                                </span>
                                <span class="badge rounded-pill">67</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="">
                                    10 - 15 years
                                </span>
                                <span class="badge rounded-pill">12</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="">
                                    15 - 20 years
                                </span>
                                <span class="badge rounded-pill">26</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="">
                                    > 20 years
                                </span>
                                <span class="badge rounded-pill">22</span>
                            </label>
                        </div>

                        <h3 class="mt-3 mt-lg-4">Career Level</h3>
                        <div class="list-group mt-2 mt-lg-3">
                            <label class="list-group-item d-flex justify-content-between align-items-center pxp-checked">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="" checked>
                                    No Experience
                                </span>
                                <span class="badge rounded-pill">34</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3 pxp-checked">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="" checked>
                                    Entry-Level
                                </span>
                                <span class="badge rounded-pill">22</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="">
                                    Mid-Level
                                </span>
                                <span class="badge rounded-pill">67</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="">
                                    Senior-Level
                                </span>
                                <span class="badge rounded-pill">12</span>
                            </label>
                            <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                <span class="d-flex">
                                    <input class="form-check-input me-2" type="checkbox" value="">
                                    Manager / Executive
                                </span>
                                <span class="badge rounded-pill">26</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 col-xxl-9">
                <div class="pxp-candidates-list-top mt-4 mt-lg-0">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h2><span class="pxp-text-light">Showing</span> 8,536 <span class="pxp-text-light">candidates</span></h2>
                        </div>
                        <div class="col-auto">
                            <select class="form-select">
                                <option value="0" selected>Most relevant</option>
                                <option value="1">Name Asc</option>
                                <option value="2">Name Desc</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-1.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Scott Goodwin</div>
                                <div class="pxp-candiadates-card-1-title">UI Designer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>London, UK</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-2.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Kenneth Spiers</div>
                                <div class="pxp-candiadates-card-1-title">Software Developer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>San Francisco, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-3.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Rebecca Eason</div>
                                <div class="pxp-candiadates-card-1-title">Marketing Expert</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Los Angeles, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-4.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Susanne Weil</div>
                                <div class="pxp-candiadates-card-1-title">Architect</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Paris, France</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="#">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-1.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Scott Goodwin</div>
                                <div class="pxp-candiadates-card-1-title">UI Designer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>London, UK</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-2.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Kenneth Spiers</div>
                                <div class="pxp-candiadates-card-1-title">Software Developer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>San Francisco, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="#">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-3.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Rebecca Eason</div>
                                <div class="pxp-candiadates-card-1-title">Marketing Expert</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Los Angeles, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-4.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Susanne Weil</div>
                                <div class="pxp-candiadates-card-1-title">Architect</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Paris, France</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-4 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(assets/images/avatar-2.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Kenneth Spiers</div>
                                <div class="pxp-candiadates-card-1-title">Software Developer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>San Francisco, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
                    <div class="col-auto">
                        <nav class="mt-3 mt-sm-0" aria-label="Candidates pagination">
                            <ul class="pagination pxp-pagination">
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn rounded-pill pxp-section-cta mt-3 mt-sm-0">Show me more<span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>