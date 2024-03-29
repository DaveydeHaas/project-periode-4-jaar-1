<?php
$content = (isset($_GET['content']) ? $_GET['content'] : false); ?>
<nav class="navbar-background-color navbar-fontsize navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand <?php if ($content == 'home') echo 'active' ?>" href="index.php?content=home"><img src="./afbeeldingen/logo.png" alt="Homepage Logo brandLogo" class="brand-logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse no-padding" id="navbarSupportedContent">
      <div class="col-4">
        <ul class="navbar-nav mr-auto">
          <li class="<?php if ($content == 'Home') echo 'active' ?>"><a href="index.php?content=home">Home</a>
          <li class="<?php if ($content == 'Informatie') echo 'active' ?>"><a href="index.php?content=informatie">Informatie</a>
          </li>
          <!-- categoriën -->
          <li class="nav-item dropdown">
            <a class=" dropdown" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Merchandise
            </a>
            <div class="dropdown-menu dropdown-content login-dropdown" aria-labelledby="navbarDropdown">
              <ul class="dropdown-width">
                <a class="dropdown-item category-style" href="index.php?content=webshop&categoryId=1">League of Legends</a>
                <a class="dropdown-item category-style" href="index.php?content=webshop&categoryId=2">God Of War 3</a>
                <a class="dropdown-item category-style" href="index.php?content=webshop&categoryId=3">Rainbow six Siege</a>
                <a class="dropdown-item category-style" href="index.php?content=webshop&categoryId=5">Minecraft</a>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- searchbar -->
      <div class="col-6">
        <!-- <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2 search-width" type="text" name="search" placeholder="Search">
          <button name="submit-search"><i class="fa fa-search"></i></button>
        </form>-->
      </div>
      <?php
      if (isset($_SESSION["id"])) {

        switch ($_SESSION["userrole"]) {
          case 'admin':
            
            echo '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              A-Panel
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?content=a-users">Users</a>
              <a class="dropdown-item" href="index.php?content=a-reset_password">Reset Password</a>
            </div>
          </li>';

            break;
          case 'root':


            break;
          case 'moderator':


            break;
          case 'user':


            break;
          default:
            break;
        }

        echo '<button class="';
        echo ($content == 'logout') ? "active" : "";
        echo ' logout-border"><a class="logout-padding" href="index.php?content=logout"><img src="./afbeeldingen/logout" class="logout-image"></a></button>';
      } else {
        echo '<div class="dropdown">
        <button class="icon-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./afbeeldingen/user-icon" class="d-block w-100 login-dropdown " alt="...">
        </button>
        <div class="dropdown-menu dropdown-content login-dropdown">
          <form action="./index.php?content=login_script" class="px-4 py-3 login-dropdown" method="post">
            <div class="form-group">
              <i class="fa fa-user"></i>
              <label for="exampleDropdownFormEmail1">Gebruikersnaam</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Gebruikersnaam">
            </div>
            <div class="form-group">
              <i class="fa fa-lock"></i>
              <label for="exampleDropdownFormPassword1">Wachtwoord</label>
              <input type="password" class="form-control" name="pass" id="inputPassword" placeholder="Wachtwoord">
            </div>

            <button type="submit" class="btn btn-primary">Log in</button>

          </form>
          <div class="dropdown-divider"></div>
          <li class=""><a href="index.php?content=registratie">Nieuw? Registreer hier!</a></li>
        </div>
      </div>';
      }
      ?>





      <button class="<?php if ($content == 'winkelmand') echo 'active' ?> icon-button winkelmand-border" type="button" id="Button" aria-expanded="false"><a href="index.php?content=winkelmand"><img src="./afbeeldingen/winkelwagen" class="winkelmand-style"></a></button>
      <?php if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
        echo '<span id="cart_count" class="text-warning bg-light">' . $count . '</span>';
      } else {
        echo '<span id="cart_count" class="text-warning bg-light">0</span>';
      }
      ?>
    </div>
  </div>
</nav>


