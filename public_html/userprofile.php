  <!DOCTYPE html>
  <html>
    <title>TAMUAccounts</title>
      <head>
        <?php session_start(); ?>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/stylesheet.css" rel="stylesheet" >
      </head>
      <body>

        <div class="navbar navbar fixed top">
          <div class="navbar-inner"> 
              
            <a class="brand" href="http://library.tamu.edu/">
             <img src="img/logo.png" alt="Library Logo">
            </a>
          </div>

          <div class="color-field">
            <div class="row-fluid">
              <div class="span12 pull left breadcrumb">
                 
                <ul class="breadcrumb">
                  <a href="http://library.tamu.edu/">University Libraries</a>
                  >
                  <a href="index.php">Welcome Page</a>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <div id="wrapper">
                <div id="sidebar-wrapper">
                    <h1>Welcome <?php echo $_SESSION['lgnuser']; ?></h1>
                    
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                        <a href="SideBarDashboard.php">Dashboard</a></li>
                        <li><a href="userprofile.php">User Profile</a></li>
                        <li><a href="#">Accounts</a>
                          <ul  class="list-group">
                           <li class="list-group-item"><a href="AccountCreation.php">Create Account</a></li>
                           <li class="list-group-item"><a href="CurrentAccounts.php">Current Accounts</a></li>
                          </ul>
                        </li>
                        <li><a href="SideBarUsers.php">Users</a></li>
                    </ul>
                </div>
                <div id="page-content-wrapper">
                    <div class="page-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                  <h1>Current User Data</h1>
                                  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form" action="PHP/Reader_Editor.php?lgnupdate=1" method="POST">
          <?php $values=$_SESSION['lgnuserinfo'];?>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">First Name: </label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $values["firstname"]; ?>" class="form-control" name="firstname">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Last Name: </label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $values["lastname"]; ?>" class="form-control" name="lastname">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Email: </label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $values["email"]; ?>" class="form-control" name="email">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" form="textinput" >password: </label>
            <div class="col-sm-4">
              <input type="password"  class="form-control" name="password">
            </div>

           

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <!-- Javascript References -->
      </body> 
      <div class="container text-center"> 
        <footer>
          <a title="Texas A&amp;M University" href="http://www.tamu.edu">Texas A&amp;M University</a>  
          <a title="Employment" href="http://library.tamu.edu/about/employment/">Employment</a>  
          <a title="Webmaster" href="http://library.tamu.edu/services/forms/contact-info.html">Webmaster</a>  
          <a title="Legal" href="http://library.tamu.edu/about/general-information/legal-notices.html">Legal</a>  
          <a title="Comments" href="http://guides.library.tamu.edu/AskTheLibraries">Comments</a>  
          <a title="979-845-3731" href="http://library.tamu.edu/about/phone/">979-845-3731</a>
          <a title="Site Map" href="http://library.tamu.edu/sitemap.html">Site Map</a>
          <a title="Accessibility" href="http://library.tamu.edu/accessibility/">Accessibility</a>
        </footer>
      </div>
  </html>