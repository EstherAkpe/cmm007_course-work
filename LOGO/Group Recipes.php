<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Recipe</title>
</head>
<link rel="stylesheet" href="style.css">
<body class="group recipes_body">
    <div>
        <header>
            <nav class="nav_container4">
                <ul class="ul_nav4">
                   <!-- <h3 class="group_2">
                        Group Recipes-->
                    </h3>
                    <li>
                        <a href="about us.html">About Us</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="register.html">Register</a>
                    </li>
                    <li>
                        <a href="group recipes.html">Group Recipes</a>
                    </li>
                    <li>
                        <a href="individual recipes.html">Individual Recipes</a>
                    </li>
                    <li>
                        <a href="contact us.html">Contact Us</a>
                    </li>
                </ul>
            </nav>
            </header>
        </div>
    <div>
        <div class="L_image">  
            <img src="Grp_rice.jpg" alt="Rice image" width="1270px" height="350px">
        </div>
    </div>
    <form class="group_3 Group Recipes-form" action="Group Recipes.php" method="post">
        <div class="row_1 login-form">
            <!--<img src="Coconut rice-27-1.jpg" alt="Rice image" width="150px" height="200px">
            <a>Coconut Rice Recipes</a>
            <img src="jollof rice.jpg" alt="Rice image" width="150px" height="200px">
                <a>Jollof Rice Recipes</a>-->        
                <?php include('fetch.php'); ?>

        </div>
        <div>
            <ul class="group_5">
                <p>To Explore the Individual Recipe of Each of the Meal, Click on the Individual Recipe Link Below.</p>
            </ul>
            <ul class="group_6">
                <h2>
                <a href="Individual Recipes.html">Individual Recipe</a>
                </h2>
            </ul>
        </div>
        <div>
            <p>To go back to the Index Page click below.</p>
             <h2>
                <a href="Index.html"> Index Page</a>
             </h2>
        </div>

</body>
</html>