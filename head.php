<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <link rel="stylesheet" type="text/css" href="/css/style.css" /> -->
    <title>Bin of Parts</title>

    <link rel="icon" type="image/png" href="/images/Avatar.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
  <div id="content">
      <nav class="bop-navbar navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-sm" href="/"><img src="/images/bop-logo-beta-full.png"></a>
            <a class="navbar-brand visible-sm" href="/"><img src="/images/bop2.png"></a>
          </div>
        <?php if($session->logged_in){ ?>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="/inventory">Inventory</a></li>
                <li><a href="/kop">Kit of Parts</a></li>
                <li><a href="/teams">Teams</a></li>
                <li><a href="/events">Events</a></li>
              </ul>
              <!-- <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input class="typeahead form-control" type="text" data-provide="typeahead" autocomplete="off" placeholder="Search for Parts">
                  </div>
              </form> -->
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $session->username ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/myteam">My Team</a></li>
                        <li><a href="/settings.php">Settings</a></li>
                    <li class="divider"></li>
                        <li><a href="/logout.php">Logout</a></li>
                    </ul>
                  </li>
              </ul>
          </div><!-- /.navbar-collapse -->
        <?php }else{?>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              <li><a href="/kop">Kit of Parts</a></li>
              <li><a href="/teams">Teams</a></li>
              <li><a href="/events">Events</a></li>
              </ul>
              <!-- <form class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                    <input class="typeahead form-control" type="text" name="search" autocomplete="off" placeholder="Search for Parts">
                  </div>
              </form> -->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li>
                <!-- <li><a href="/register.php">Register</a></li> -->
              </ul>
          </div>
        <?php }?>
      </div>
      </nav>