<?php
$content = (isset($_GET['content'])?$_GET['content']:false); ?>
<nav class="navbar-background-color navbar-fontsize navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
      <a class="navbar-brand <?php if ($content == 'home') echo 'active'?>" href="index.php?content=home"><img
          src="./afbeeldingen/logo.png" alt="Homepage Logo brandLogo" class="brand-logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse no-padding" id="navbarSupportedContent">
        <div class="col-4">  
        <ul class="navbar-nav mr-auto ">
            <li class="<?php if ($content == 'home') echo 'active'?>"><a href="index.php?content=home">Home</a></li>
            <li class="<?php if ($content == 'webshop') echo 'active'?>"><a href="index.php?content=webshop">Webshop</a></li> 
            <li class="<?php if ($content == 'winkelmand') echo 'active'?>"><a href="index.php?content=winkelmand">Winkelmand</a></li> 
          </ul>
        </div>
        <div class="col-6">
          <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
        <div class="col-2">
          <ul class="nav nav-profile">
            <li class="<?php if ($content == 'login') echo 'active'?>"><a href="index.php?content=login">login</a></li>
            <li class="<?php if ($content == 'registratie') echo 'active'?>"><a href="index.php?content=registratie">registratie</a></li>
          </ul>

          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
        </div>
  </div>
</nav>         