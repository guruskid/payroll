<html>
<head>
<title></title>

   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



</head>

 <?php


      error_reporting(0);
      session_start();
      include_once '../oesdb.php';

      /***************************** Step 2 ****************************/
      if(isset($_REQUEST['admsubmit']))
      {
          
          $result=executeQuery("select * from adminlogin where admname='".htmlspecialchars($_REQUEST['name'],ENT_QUOTES)."' and admpassword='".md5(htmlspecialchars($_REQUEST['password'],ENT_QUOTES))."'");
        
         // $result=mysql_query("select * from adminlogin where admname='".htmlspecialchars($_REQUEST['name'])."' and admpassword='".md5(htmlspecialchars($_REQUEST['password']))."'");
          if(mysql_num_rows($result)>0)
          {
              
              $r=mysql_fetch_array($result);
              if(strcmp($r['admpassword'],md5(htmlspecialchars($_REQUEST['password'],ENT_QUOTES)))==0)
              {
                  $_SESSION['admname']=htmlspecialchars_decode($r['admname'],ENT_QUOTES);
                  unset($_GLOBALS['message']);
                  header('Location: admwelcome.php');
              }else
          {
             $_GLOBALS['message']="Check Your user name and Password.";
                 
          }

          }
          else
          {
              $_GLOBALS['message']="Check Your user name and Password.";
              
          }
          closedb();
      }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Administrator Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../oes.css"/>
  </head>
  <body>
<!--
*********************** Step 1 ****************************
-->
      <?php
      
        if(isset($_GLOBALS['message']))
        {
         echo "<div class=\"message\">".$_GLOBALS['message']."</div>";
        }
      ?>
     <body class="gray-bg">


<div class="container">
  <div class="page-header">
  <h1>ICONNECT Global Communications </h1>
</div>
<div class="panel panel-default">
  <div class="panel-body">

        <div id="container">
            <div class="col-md-12"></div>



  <div class="panel panel-default">
  <div class="panel-heading"><h3>Admin Login</h3></div>
  <div class="panel-body">
            
      <div class="menubar">
        &nbsp;
      </div>
      <div class="page">
              <form id="indexform" action="index.php" method="post">
              <table cellpadding="30" cellspacing="10">
              <tr>
                  <td>Admin Name</td>
                  <td><input type="text" name="name" value="" size="16" /></td>

              </tr>
              <tr>
                  <td> Password</td>
                  <td><input type="password" name="password" value="" size="16" /></td>
              </tr>

              <tr>
                  <td colspan="2">
                      <input type="submit" value="Log In" name="admsubmit" class="subbtn" />
                  </td><td></td>
              </tr>
            </table>

        </form>

      </div>

    
      </div>

      </div>

      </div>

      </div>

      </div>

      </div>

      </div>
  </body>
</html>
