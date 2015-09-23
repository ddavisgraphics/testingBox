<!DOCTYPE html>
<html lang="en">
    <head>
    <title>{local var="siteTitle"}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="keywords" content="{local var="currentDisplayObjectKeywords"}">
        <meta name="description" content="{local var="currentDisplayObjectDescription"}">
        <meta name="author" content="WVU Libraries">

        <meta http-equiv="cleartype" content="on">
        <link rel="shortcut icon" href="https://wvrhc.lib.wvu.edu/favicon.ico">

        <!-- CMS CSS -->
        <link href="https://lib.wvu.edu/css/2014/wvu.css" type="text/css" rel="stylesheet" />
        <link href="https://lib.wvu.edu/css/2014/ilstyles.css" type="text/css" rel="stylesheet" />
        <link href="https://lib.wvu.edu/css/2014/safari.css" type="text/css" rel="stylesheet" />

        <!-- External CSS -->
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" type="text/css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,400italic,300italic,600,600italic,700,900,700italic,900italic|Bitter:400,400italic,700' rel='stylesheet' type='text/css'>

        <!-- JavaScripts -->
        <script type="text/javascript" src="https://lib.wvu.edu/javascript/2014/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="https://lib.wvu.edu/javascript/2014/scripts.js"></script>

        <!-- CSS Attribute/CSS Media Query/CSS Psuedo-Class/HTML Semantic Elements fallback for less than IE9 -->
        <!--[if IE 9]>
            <link href="https://lib.wvu.edu/css/2014/ie9.css" type="text/css" rel="stylesheet" />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="https://lib.wvu.edu/javascript/2014/respond.min.js"></script>
            <script src="https://lib.wvu.edu/javascript/2014/selectivizr.min.js"></script>
            <script>
                document.createElement('header');
                document.createElement('nav');
                document.createElement('section');
                document.createElement('article');
                document.createElement('aside');
                document.createElement('footer');
                document.createElement('video');
            </script>
        <![endif]-->

        <?php recurseInsert("../src/includes/headerIncludes.php","php"); ?>
    </head>
    <body>
        <header>

            <!-- WVU Header -->
            <div class="wvu-header mobile wvubottom">
                <a href="#" id="wvutoggle"><img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="https://lib.wvu.edu//images/2014/wvu_logo.png"></a>
                <a href="http://www.wvu.edu" class=" wvu-header-logo tablet"><img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="https://lib.wvu.edu//images/2014/wvu_logo.png"></a>
                <ul class="list">
                    <li><a class="links" href="http://www.wvu.edu/SiteIndex/">A-Z Site Index</a></li>
                    <li><a class="links" href="http://www.wvu.edu/campusmap/">Campus Maps</a></li>
                    <li><a class="links" href="http://jobs.wvu.edu/">Jobs</a></li>
                    <li><a class="links" href="https://lib.wvu.edu/about/directory/">Directory</a></li>
                    <li><a class="links" href="https://lib.wvu.edu/about/contactus/">Contact Us</a></li>
                    <li><a class="links" href="https://lib.wvu.edu/hours/" title="">Library Hours</a></li>
                    <li><a class="links" href="http://www.wvu.edu/">WVU Home</a></li>
                </ul>
            </div>
            <div class="wvu-header tablet wvubottom">
                <div class="wrap">
                    <a href="http://www.wvu.edu" class="wvu-header-logo"><img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="https://lib.wvu.edu//images/2014/wvu_logo.png"></a>
                    <ul class="wvu-header-mobile-list">
                        <li><a href="http://www.wvu.edu/SiteIndex/">A-Z Site Index</a></li>
                        <li><a href="http://www.wvu.edu/campusmap/">Campus Maps</a></li>
                        <li><a href="http://jobs.wvu.edu/">Jobs</a></li>
                        <li><a href="https://lib.wvu.edu/about/directory/">Directory</a></li>
                        <li><a href="https://lib.wvu.edu/about/contactus/">Contact Us</a></li>
                        <li><a href="https://lib.wvu.edu/hours/" title="">Library Hours</a></li>
                    </ul>
                </div>
            </div>

            <!-- Image Background -->
            <div class="backpage-wrapper">
                <!-- Site Header, Social Media, and Navigation -->
                    <div class="site-header">
                        <div class="site-header-top">
                            <div class="site-header-title">
                                <h1><a href="/">WVU Libraries</a></h1>
                            </div>
                            <ul class="site-header-social">
                                <li>
                                    <a class="socmedia" target="_blank" href="http://www.facebook.com/WVULibraries">
                                        <img src="https://lib.wvu.edu/images/2014/wvufacebook.png" alt="Facebook" title="Facebook"></img>
                                    </a>
                                </li>
                                <li>
                                    <a class="socmedia" href="https://plus.google.com/100326194366145492876" rel="publisher" target="_blank">
                                        <img src="https://lib.wvu.edu/images/2014/wvugoogleplus.png" alt="Google+" title="Google+"</img>
                                    </a>
                                </li>
                                <li>
                                    <a class="socmedia" href="http://instagram.com/wvulibrarianlinda" target="_blank">
                                        <img src="https://lib.wvu.edu/images/2014/instagram.png" alt="Instagram" title="Instagram"</img>
                                    </a>
                                </li>
                                <li>
                                    <a class="socmedia" target="_blank" href="https://twitter.com/wvuLibraries">
                                        <img src="https://lib.wvu.edu/images/2014/wvutwitter.png" alt="Twitter" title="Twitter"></img>
                                    </a>
                                </li>
                                <li>
                                    <a class="socmedia" target="_blank" href="http://www.youtube.com/WVULibraries">
                                        <img src="https://lib.wvu.edu/images/2014/wvuyoutube.png" alt="Youtube" title="Youtube"></img>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <nav class="site-header-nav">
                            <ul>
                                <li id="toggle"><i class="fa fa-bars"></i><i class="fa fa-times"></i> &nbsp; Menu</span></li>
                                <li class="navtoggle home"><a href="http://mountainlynx.lib.wvu.edu/vwebv/myAccount?sk=m"><span class="navtitle">Renew Books</span></a></li>
                                <li class="navtoggle"><a href="/about/"><i class="fa fa-info-circle"></i><span class="navtitle">About Us</span></a></li>
                                <li class="navtoggle"><a href="https://lib.wvu.edu/collections/"><i class="fa fa-inbox"></i><span class="navtitle">Collections</span></a></li>
                                <li class="navtoggle"><a href="/instruction"><i class="fa fa-graduation-cap"></i><span class="navtitle">Instruction</span></a></li>
                                <li class="navtoggle"><a href="https://lib.wvu.edu/about/news/"><i class="fa fa-rss"></i><span class="navtitle">News</span></a></li>
                                <li class="navtoggle"><a href="/services/"><i class="fa fa-cog"></i><span class="navtitle">Services</span></a></li>
                                <li class="navtoggle"><a href="/about/contactus/"><i class="fa fa-question-circle"></i><span class="navtitle">Contact Us</span></a></li>
                                <li class="navtoggle"><a href="/about/giving/"><i class="fa fa-heart"></i><span class="navtitle">Give</span></a></li>
                            </ul>
                        </nav>
                    </div>
            </div>
        </header>

        <!-- Page Wrapper -->
        <div class="wrap hpcard">
            <section class="bp-body-1c">