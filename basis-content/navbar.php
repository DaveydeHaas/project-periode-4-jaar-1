<?php
$content = (isset($_GET['content'])?$_GET['content']:false); ?>
<nav class="navbar-background-color navbar-fontsize navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand <?php if ($content == 'home') echo 'active'?>" href="index.php?content=home"><img
        src="./afbeeldingen/logo.png" alt="Homepage Logo brandLogo" class="brand-logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse no-padding" id="navbarSupportedContent">
      <div class="col-4">
        <ul class="navbar-nav mr-auto mega-drop">
          <li class="<?php if ($content == 'Home') echo 'active'?>"><a href="index.php?content=home">Home</a>
          </li>
          <!-- categoriën -->
          <li class="<?php if ($content == 'webshop') echo 'active'?>"><a class="text-fix">Categoriën</a>
            <div class="drop-sub">
              <ul>
                <li><a href="">link 01</a></li>
                <li><a href="">link 02</a></li>
                <li><a href="">link 03</a></li>
                <li><a href="">link 04</a></li>
                <li><a href="">link 05</a></li>
              </ul>
            </div>
          </li>    
        </ul>
      </div>
      <!-- searchbar -->
      <div class="col-6">
        <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2 search-width" type="text" placeholder="Search">
          <button><i class="fa fa-search"></i></button>
        </form>
      </div>
      <!-- login -->
      <div class="dropdown">
        <button class="icon-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><img src="./afbeeldingen/user-icon" class="d-block w-100 login-dropdown " alt="...">
        </button>
        <div class="dropdown-menu dropdown-content login-dropdown">
          <form class="px-4 py-3 login-dropdown">
            <div class="form-group">
              <i class="fa fa-user"></i>
              <label for="exampleDropdownFormEmail1">Gebruikersnaam</label>
              <input type="name" class="form-control" id="exampleDropdownFormEmail1" placeholder="Gebruikersnaam">
            </div>
            <div class="form-group">
            <i class="fa fa-lock"></i>
              <label for="exampleDropdownFormPassword1">Wachtwoord</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Wachtwoord">
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
          </form>
          <div class="dropdown-divider"></div>
          <li class=""><a href="index.php?content=registratie">Nieuw? Registreer hier!</a></li>
          <li class=""><a href="#">Wachtwoord vergeten</a></li>
        </div>

      </div>
      <button class="<?php if ($content == 'home') echo 'active'?> icon-button winkelmand-border" type="button" id="Button"
          aria-expanded="false"><a href="index.php?content=winkelmand"><img src="./afbeeldingen/winkelwagen" class="winkelmand-style"></a></button>
    </div>
  </div>
</nav>


