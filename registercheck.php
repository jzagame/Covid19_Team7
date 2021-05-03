<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
    <link rel="stylesheet" href="css/style.css">

    <title>COVID-19 Vaccine | Registration</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container-fluid site-title">
        <!-- <div class=""> -->
        <div class="container">
            <div class="row">
                <h3>L2-team07</h3>
            </div>
        </div>
    </div>

    <div id="cdc-meganav-wrapper">

        <div class="container" id="cdc-meganav-bar">

            <nav class="navbar navbar-expand-xl yamm">

                <ul class="nav navbar-nav nav-justified w-100">

                    <li class="nav-item" id="menu_home">
                        <a class="nav-link" href="home.html">
                            Home</a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html">
                            Pfizer-BioNTech Vaccine</a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html">
                            Oxford-AstraZeneca Vaccine</a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html">
                            Moderna Vaccine</a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link" href="page4.html">
                            Registration</a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link active" href="page5.html">
                            Vaccine Checking						</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">

        <!-- Content -->
        <main class="col-xl-9 order-xl-2">

            <div class="row">

                <div class="col content">

                    <div class="row">
                        <br>
                        <h2 id="content" class="open d-lg-block">Vaccine Checking</h2>
                        <br>
                        <br>
                        <br>

                    </div>
                    
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="row-fluid">
                                    <div class="vc_empty_space col-12 pt-3 pb-3">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="color-bar cyan half">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <?php
        
                                    // echo $_POST['input_nric'];
                                    
                                    if (file_exists($_POST['input_nric'] . '.txt')){
                                        echo '<h3>You are already registered!</h3>';
                                    }
                                    else{
                                        echo '<h3>You have not registered!</h3><br>';
                                        echo '<a href ="page4.html">Register here</a>';
                                        echo '<br>';
                                        echo '<br>';
                                        echo '<br>';
                                    }

                                ?>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card border-0 rounded-0">
                                    <div class="card-body bg-quaternary">
                                        <h2 class="card-title h3 mb-3 text-left">Duration of Protection</h2>
                                        <p>It is not yet known how long protection lasts with any of the coronavirus vaccines.</p>
                                        <p>A study found that unvaccinated people who have had Covid, develop protection for at least six months. Vaccines are likely to provide stronger protection than this.</p>
                                        <p>It may be that people need annual vaccinations, as happens with the flu jab.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

        </main>

    </div>

    <div class="container-fluid">
        <div class="container">

            <div class="card-body bg-quaternary">

                <h5>Disclaimer</h5>
                <p style="font-size:14px;">This website is created mainly for educational and non-commercial use only. It is a partial fulfillment for completion of unit SWE20001 - Development Project 1 offered in Swinburne University of Technology, Sarawak Campus. The web-master
                    and author(s) do not represent the business entity. The content of the pages of this website might be out-dated or inaccurate, thus, the author(s) and web-master does not take any responsibility for incorrect information disseminated
                    or cited from this website.</p>

            </div>
        </div>
    </div>

</body>

</html>