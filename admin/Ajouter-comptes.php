
<!Doctype HTML>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/Ajouter-comptes.css" />
    <script type="text/javascript" src="dashbord.js"></script>
</head>


<body>

<?php 

require_once ("menu.php");
forcerUtilisateurConnecte();

   
   
   
   ?>

  
    <div id="main">

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">☰ Menu</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">☰ Menu</span>
            </div>

            <div class="col-div-6">
                <!-- <div class="profile">

            <img src="images/user.png" class="pro-img" />
            <p>Manoj Adhikari <span>UI / UX DESIGNER</span></p>
        </div> -->
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br />

        <div class="col-div-3">
            <div class="box">
                <p>6<br /><span>Appartements</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>88<br /><span>Clients</span></p>
                <i class="fa fa-list box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>99<br /><span>Orders</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>78<br /><span>Tasks</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <br /><br />


        <div class="container">
            <h2>Ajouter un Compte</h2>
            <form action="traitement-ajouter-comptes.php" enctype="multipart/form-data" method="post">

                <label for="photos">Photo :</label>
                <input type="file" id="photos" name="photos" accept="image/svg">

                <label for="lastname">Nom :</label>
                <input type="text" id="lastname" name="lastname" placeholder="Votre nom">

                <label for="firstname">Prenom :</label>
                <input type="text" id="firstname" name="firstname" placeholder="votre prenom">

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="votre email">

                <label for="Mot de Passe">Mot de Passe :</label>
                <input type="password" id="password" name="password" placeholder="votre mot passe">

                <label for="role">role:</label>
                <input type="text" id="role" name="role" placeholder="le rôle" >

                <button type="submit">Ajouter</button>
            </form>
        </div>



        <!-- <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Total Sale <span>Sell All</span></p>

                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"> 70% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="clearfix"></div>

        <footer>
            <h2>franck-mabikas</h2>

        </footer>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        $(".nav").click(function () {
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".prenom").css('visibility', 'hidden');
            $(".prenom span").css('visibility', 'visible');
            $(".prenom span").css('margin-left', '-10px');
            $(".menu-a").css('visibility', 'hidden');
            $(".menu").css('visibility', 'visible');
            $(".menu").css('margin-left', '-8px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
        });

        $(".nav2").click(function () {
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".prenom").css('visibility', 'visible');
            $(".menu-a").css('visibility', 'visible');
            $(".menu").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
        });

    </script>







</body>


</html>