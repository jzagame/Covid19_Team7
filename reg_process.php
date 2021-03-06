<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
    <link rel="stylesheet" href="css/style.css">

    <title>MWE | Register</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <style>

        .content {
            margin-bottom: 100px;
        }
    </style>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

                    <li class="nav-item" id="menu-home">
                        <a class="nav-link" href="home.html">Home						</a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html">Pfizer-BioNTech	Vaccine					</a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html">Oxford-AstraZeneca Vaccine				</a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html">Moderna	Vaccine					</a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link active" href="page4.html">Registration					</a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link" href="page5.html">Vaccine Checking						</a>
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
                        <h2 id="content" class="open d-lg-block">Registration Results</h2>
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
                                <div class="card border-0 rounded-0 mb-3">
                                    <div class="card-body ">
                                        
                                        <!-- Registration Results -->
                                        <div class="content">

                                        <?php
                                        // Check if the form fields are empty
                                        if (!empty($_POST['input_name']) && !empty($_POST['input_nric'])) {
                                            // echo $_POST['input_name'];
                                            // echo '<br>';
                                            // echo $_POST['input_nric'];
                                            if (file_exists($_POST['input_nric'] . '.txt')) {     //Check for filename with given nric
                                                echo '<h3>You are already registered!</h3>';
                                            } else {  //filename not found, write to file
                                                $content_to_write = "Name: " . $_POST['input_name'] . "\n";
                                                $content_to_write .= "NRIC: " . $_POST['input_nric'] . "\n";
                                                file_put_contents($_POST['input_nric'] . '.txt', $content_to_write);
                                                echo '<h3>Registration is successful!</h3>';
                                            }
                                        } else {
                                            echo '<h3>Please fill in all of the form fields!</h3>';
                                        }

                                        echo '<br /><br /><p><a href="page4.html">Return</a></p>';
                                        ?>

                                        </div>
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