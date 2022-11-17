<?php session_start(); ?>
<?php if (!isset($_SESSION['current_session'])) header('Location: login.php'); ?>
<?php include '../functions/functions.php';?>
<!DOCTYPE html>
<html lang="en-us"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | <?php echo $_SESSION['current_session']['user']['last_name'] . ' ' . $_SESSION['current_session']['user']['first_name']; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
* {
  box-sizing: border-box;
  font-family:"Roboto";
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;

}

.header {
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
 
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  background-color: #33cc80;
}

.menu li:hover {
  background-color: #0099cc;
  color:#fff;
  
}
a{
   color:#fff;
  
}
.aside {
  background-color:#222f3e;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  background-color:#222f3e;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>
<h1> <?=template_header('Home')?></h1>
<div class="row">
  <div class="col-3 menu">
     <img src="#" alt="  cat">
  </div>

  <div class="col-6">
  <div class="container mb-8">
        <div class="row center-align">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <div class="jumbotron">                
                    <p class="mb-4">Dashboard</p>
                    <hr>
                    <p>Welcome back <?php echo $_SESSION['current_session']['user']['last_name'] . ' ' . $_SESSION['current_session']['user']['first_name']; ?></p>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    
  </div>

  <div class="col-3 right">
    <div class="aside">
      <h2>What?</h2>
      <p>Chania is a city on the island of Crete.</p>
      <h2>Where?</h2>
      <p>Crete is a Greek island in the Mediterranean Sea.</p>
      <h2>How?</h2>
      <p>You can reach Chania airport from all over Europe.</p>
    </div>
  </div>
</div>

<div class="footer">
<?=template_footer()?>  
</div>

</body>
</html>
