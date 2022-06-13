<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img src="img/2.jfif" width="75px" height="75px"></img>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'home'){echo "color: black";}?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == "sushi"){echo "color: black";}?>" href="sushi.php">Bestellen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'contact'){echo "color: black";}?>" href="contact.php">Contact</a> 
                </li>
            </ul>
        </div>
    </div>
</nav>