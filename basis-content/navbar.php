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
          <ul class="navbar-nav mr-auto ">
            <li class="<?php if ($content == 'home') echo 'active'?>"><a href="index.php?content=home">Home</a></li>
            <li class="<?php if ($content == 'webshop') echo 'active'?>"><a href="index.php?content=webshop">Webshop</a></li> 
            <li class="<?php if ($content == 'winkelmand') echo 'active'?>"><a href="index.php?content=winkelmand">Winkelmand</a></li> 
          </ul>
          <ul class="nav nav-profile">
            <li class="<?php if ($content == 'login') echo 'active'?>"><a href="index.php?content=login">login</a></li>
            <li class="<?php if ($content == 'registratie') echo 'active'?>"><a href="index.php?content=registratie">registratie</a></li>
          </ul>
        </div>
  </div>
</nav>         