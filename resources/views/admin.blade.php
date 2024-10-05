<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="../assets/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />
</head>

<body>
    <div class="app" id="app">

        <div id="aside" class="app-aside modal fade nav-expand">
            <div class="left navside black dk" layout="column">
                <div class="navbar no-radius">
                    <!-- brand -->
                    <a class="navbar-brand">
                        <div ui-include="'../assets/images/logo.svg'"></div>
                        <img src="../assets/images/logo.png" alt="." class="hide">
                        <span class="hidden-folded inline">Admin Panel</span>
                    </a>
                    <!-- / brand -->
                </div>
                <div flex-no-shrink>
                    <div ui-include="'../views/blocks/aside.top.2.html'"></div>
                </div>
                <div flex class="hide-scroll">
                    <nav class="scroll nav-stacked nav-active-primary">

                        <ul class="nav" ui-nav>
                            <li class="nav-header hidden-folded">
                                <small class="text-muted">Əsas</small>
                            </li>

                            <li>
                                <a href="dashboard.html">
                                    <span class="nav-icon">
                                        <i class="material-icons">&#xe3fc;
                                            <span ui-include="'../assets/images/i_0.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Panel</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div flex-no-shrink>
                    <div ui-include="'../views/blocks/aside.bottom.0.html'"></div>
                </div>
            </div>
        </div>
        <!-- / aside -->

        <!-- content -->
        <div id="content" class="app-content box-shadow-z1" role="main">
            <div class="app-header white box-shadow">
                <div class="navbar navbar-toggleable-sm flex-row align-items-center">
                    <!-- Open side - Naviation on mobile -->
                    <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                        <i class="material-icons">&#xe5d2;</i>
                    </a>
                    <!-- / -->


                    <!-- navbar right -->
                    <ul class="nav navbar-nav ml-auto flex-row">
                        <li class="nav-item dropdown">
                            <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                                <span class="avatar w-32">
                                    <img src="../assets/images/a0.jpg" alt="...">
                                    <i class="on b-white bottom"></i>
                                </span>
                            </a>
                            <div ui-include="'../views/blocks/dropdown.user.html'"></div>
                        </li>
                        <li class="nav-item hidden-md-up">
                            <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                                <i class="material-icons">&#xe5d4;</i>
                            </a>
                        </li>
                    </ul>
                    <!-- / navbar right -->
                </div>
            </div>
            <div ui-view class="app-body" id="view">

                <!-- ############ PAGE START-->
                <div class="row no-gutter b-b white">
                    <div class="col-md-8 b-r">
                        <div class="p-a-md">
                            <h6>Open Projects <span class="label">9</span></h6>
                            <small>Your data status</small>
                            <ul class="list no-padding">
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 circle _600 text-lg text-white blue-200">
                                            B
                                            </apan>
                                    </a>
                                    <div class="list-body">
                                        <div class="m-y-sm pull-right">
                                            <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                            <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                        </div>
                                        <div><a href>Broadcast web app mockup</a></div>
                                        <div class="text-sm">
                                            <span class="text-muted"><strong>5</strong> tasks, <strong>3</strong>
                                                issues</span>
                                            <span class="label"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 circle _600 text-lg text-white blue-200">
                                            G
                                            </apan>
                                    </a>
                                    <div class="list-body">
                                        <div class="m-y-sm pull-right">
                                            <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                            <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                        </div>
                                        <div><a href>GoodDesign Bootstrap 4 migration</a></div>
                                        <div class="text-sm">
                                            <span class="text-muted"><strong>35</strong> tasks, <strong>6</strong>
                                                issues</span>
                                            <span class="label"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 circle _600 text-lg text-white blue-200">
                                            #
                                            </apan>
                                    </a>
                                    <div class="list-body">
                                        <div class="m-y-sm pull-right">
                                            <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                            <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                        </div>
                                        <div><a href>#Hashtag android app develop</a></div>
                                        <div class="text-sm">
                                            <span class="text-muted"><strong>52</strong> tasks, <strong>13</strong>
                                                issues</span>
                                            <span class="label"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 circle _600 text-white blue-200">
                                            <i class="fa fa-lg fa-google"></i>
                                            </apan>
                                    </a>
                                    <div class="list-body">
                                        <div class="m-y-sm pull-right">
                                            <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                            <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                        </div>
                                        <div><a href>Google material design application</a></div>
                                        <div class="text-sm">
                                            <span class="text-muted"><strong>15</strong> tasks, <strong>3</strong>
                                                issues</span>
                                            <span class="label"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 circle _600 text-white blue-200">
                                            <i class="fa fa-lg fa-facebook"></i>
                                            </apan>
                                    </a>
                                    <div class="list-body">
                                        <div class="m-y-sm pull-right">
                                            <a href class="btn btn-xs white"><i class="fa fa-pencil"></i></a>
                                            <a href class="btn btn-xs white"><i class="fa fa-remove"></i></a>
                                        </div>
                                        <div><a href>Facebook connection web application</a></div>
                                        <div class="text-sm">
                                            <span class="text-muted"><strong>30</strong> tasks, <strong>5</strong>
                                                issues</span>
                                            <span class="label"></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-a-md">
                            <a href class="pull-right"><span class="label blue">910</span></a>
                            <h6>Tickets</h6>
                            <small>230 tickets need answerns</small>
                            <ul class="list no-padding">
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 avatar red-100">
                                            <span>C</span>
                                            <i class="on b-white bottom"></i>
                                        </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Chris Fox</a></div>
                                        <a href class="text-muted">How to create an icon like the demo app</a>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 avatar purple-100">
                                            <span>M</span>
                                            <i class="on b-white bottom"></i>
                                        </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Mogen Polish</a></div>
                                        <a href class="text-muted">How to build my custom color</a>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 avatar blue-200">
                                            <span>J</span>
                                            <i class="off b-white bottom"></i>
                                        </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Joge Lucky</a></div>
                                        <a href class="text-muted">What is the app requriements</a>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 avatar warning">
                                            <span>F</span>
                                            <i class="on b-white bottom"></i>
                                        </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Folisise Chosielie</a></div>
                                        <a href class="text-muted">Where to find the API</a>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
                                        <span class="w-40 avatar green-100">
                                            <span>P</span>
                                            <i class="away b-white bottom"></i>
                                        </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Peter</a></div>
                                        <a href class="text-muted">How to add my router</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ############ PAGE END-->

            </div>
        </div>
        <!-- / content -->

        <!-- ############ LAYOUT END-->

    </div>
    <!-- build:js scripts/app.html.js -->
    <!-- jQuery -->
    <script src="../libs/jquery/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
    <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <!-- core -->
    <script src="../libs/jquery/underscore/underscore-min.js"></script>
    <script src="../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="../libs/jquery/PACE/pace.min.js"></script>

    <script src="scripts/config.lazyload.js"></script>

    <script src="scripts/palette.js"></script>
    <script src="scripts/ui-load.js"></script>
    <script src="scripts/ui-jp.js"></script>
    <script src="scripts/ui-include.js"></script>
    <script src="scripts/ui-device.js"></script>
    <script src="scripts/ui-form.js"></script>
    <script src="scripts/ui-nav.js"></script>
    <script src="scripts/ui-screenfull.js"></script>
    <script src="scripts/ui-scroll-to.js"></script>
    <script src="scripts/ui-toggle-class.js"></script>

    <script src="scripts/app.js"></script>

    <!-- ajax -->
    <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
    <script src="scripts/ajax.js"></script>
    <!-- endbuild -->
</body>

</html>
