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
          <li class="<?php if ($content == 'webshop') echo 'active'?>"><a href="index.php?content=webshop">Webshop</a>
          </li>
          <li class="<?php if ($content == 'winkelmand') echo 'active'?>"><a
              href="index.php?content=winkelmand">Winkelmand</a></li>
        </ul>
      </div>
      <div class="col-6">
        <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
      <div class="dropdown">
        <button class="icon-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><img src="./afbeeldingen/user-icon" class="d-block w-100" alt="...">
        </button>
        <div class="dropdown-menu">
          <form class="px-4 py-3">
            <div class="form-group">
              <label for="exampleDropdownFormEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Wachtwoord</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Wachtwoord">
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?content=registratie">New around here? Sign up</a>
          <a class="dropdown-item" href="#">Forgot password?</a>
        </div>

      </div>
    </div>
  </div>
</nav>
