<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Recipe</title>
</head>
<link rel="stylesheet" href="style.css">
<body class="individual recipes_body">
    <div>
        <header>
            <nav class="nav_container4">
                <ul class="ul_nav4">
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
                        <a href="Contact Us.html">Contact Us</a>
                    </li>
                </ul>
            </nav>
            </header>
        </div>
        <div class="L_image">  
            <img src="Grp_rice.jpg" alt="Rice image" width="1270px" height="350px">
        
        <form class="group_3 Individual Reccipes-form" action="Individual Recipes.php" method="post">
        <div class="row_1 login-form">


        <?php include('fetchindividualrecipe.php'); ?>



        </div>
        <div >
            <ul class="ind_17">
                <p>To Explore more on the Individual Recipe, Click on each of them.</p>
            </ul>
        </div>
        <footer>
        <div>
            <h2 class="ind_5">
                <p>Connect With Us</p>
                <ul class="ind_6">
                    <a href="http://www.facebook.com"><img src="Facebook_logo_36x36.svg.png" alt="Facebook" width="17px" height="17px"></a>
                    <a href="http://www.twitter.com"><img src="Twitter-260nw-601425683.webp" alt="Twitter" wigth="20px" height="20px"></a>
                    <a href="http://www.linkedIn.com"><img src="in.jpeg" alt="linkedIn" wigth="20px" height="20px"></a>
                </ul>
            </h2> 
        </div>
        <div>
            <p>To go back to the Index Page click below.</p>
           <h2>
               <a href="Index.html"> Index Page</a>
           </h2>
        </div>
    </footer>
</body>
</html>


