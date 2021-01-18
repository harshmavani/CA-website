<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
// echo $current_file_name."\n";
?>

<!-- header lower -->
<div class="header-lower">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
               <!--  <div class="logo-box">
                    <a href="index.php"></a>
                </div> -->
                <div class="logo-box-dsn">
                    <div>
                        <a href="index.php"><img src="../dsn/images/logo/logo1.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="menu-bar">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php if($current_file_name == "index.php"){ echo 'current'; } ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="<?php if($current_file_name == "about.php"){ echo 'current'; } ?>">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="dropdown <?php if($current_file_name == "services.php" || $current_file_name == "assurance_services.php" || $current_file_name == "direct_indirect_taxation.php" || $current_file_name == "business_management_consulting_services.php" || $current_file_name == "corporate_laws.php" || $current_file_name == "personal_advisory_services.php"){ echo 'current'; } ?>">
                                    <a class="dropdown" href="services.php">Services</a>
                                    <ul>
                                        <li class="<?php if($current_file_name == "assurance_services.php"){ echo 'current'; } ?>">
                                            <a href="assurance_services.php" class="active">Assurance Services</a>
                                        </li>
                                        <li class="<?php if($current_file_name == "direct_indirect_taxation.php"){ echo 'current'; } ?>">
                                            <a href="direct_indirect_taxation.php">Direct & Indirect Taxation</a>
                                        </li>
                                        <li class="<?php if($current_file_name == "business_management_consulting_services.php"){ echo 'current'; } ?>">
                                            <a href="business_management_consulting_services.php">Business Management & Consulting Services</a>
                                        </li>
                                        <li class="<?php if($current_file_name == "corporate_laws.php"){ echo 'current'; } ?>">
                                            <a href="corporate_laws.php">Corporate Laws</a>
                                        </li>
                                        <li class="<?php if($current_file_name == "personal_advisory_services.php"){ echo 'current'; } ?>">
                                            <a href="personal_advisory_services.php">Personal advisory services</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?php if($current_file_name == "partner_profile.php"){ echo 'current'; } ?>">
                                    <a href="partner_profile.php">Partner's Profile</a>
                                </li>
                                <li class="<?php if($current_file_name == "contact.php"){ echo 'current'; } ?>">
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header lower -->
<!--sticky header-->
<div class="sticky-header">
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="liogo-box">
                    <a href="index.php"></a>
                    <div class="logo-box-dsn">
                        <div>
                            <a href="index.php"><img src="../dsn/images/logo/logo1.png"></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="menu-bar">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php if($current_file_name == "index.php"){ echo 'current'; } ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="<?php if($current_file_name == "about.php"){ echo 'current'; } ?>">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="dropdown <?php if($current_file_name == "services.php" || $current_file_name == "assurance_services.php" || $current_file_name == "direct_indirect_taxation.php" || $current_file_name == "business_management_consulting_services.php" || $current_file_name == "corporate_laws.php" || $current_file_name == "personal_advisory_services.php"){ echo 'current'; } ?>">
                                     <a class="dropdown" href="services.php">Services</a>

                                     <ul>
                                        <li class="<?php if($current_file_name == "assurance_services.php"){ echo 'current'; } ?>">
                                            <a href="assurance_services.php" class="active">Assurance Services</a>
                                        </li>
                                        <li class="<?php if($current_file_name == "direct_indirect_taxation.php"){ echo 'current'; } ?>">
                                            <a href="direct_indirect_taxation.php">Direct & Indirect Taxation</a>
                                        </li>
                                        <li class="<?php if($current_file_name == "business_management_consulting_services.php"){ echo 'current'; } ?>">
                                            <a href="business_management_consulting_services.php">Business Management & Consulting Services</a>
                                        </li>
                                        <li class="<?php if($current_file_name == "corporate_laws.php"){ echo 'current'; } ?>">
                                            <a href="corporate_laws.php">Corporate Laws</a>
                                        </li>
                                        <li class="<?php if($current_file_name == "personal_advisory_services.php"){ echo 'current'; } ?>">
                                            <a href="personal_advisory_services.php">Personal advisory services</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="<?php if($current_file_name == "partner_profile.php"){ echo 'current'; } ?>">
                                    <a href="partner_profile.php">Partner's Profile</a>
                                </li>
                                <li class="<?php if($current_file_name == "contact.php"){ echo 'current'; } ?>">
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sticky header -->