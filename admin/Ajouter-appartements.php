
<!Doctype HTML>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/ajouter-appartements.css" />
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
            <h2>Ajouter un Appartements</h2>

            <form action="traitement-ajouter-appartements.php" enctype="multipart/form-data" method="POST">

                <label for="photos">Photo :</label>
                <input type="file" id="photos" name="photos" accept="image/png, image/jpeg" >

                <label for="categorie">Categorie :</label>
                <input type="text" id="categorie" name="categorie" placeholder="la categorie">

                <label for="superficie">Superficie :</label>
                <input type="text" id="superficie" name="superficie" placeholder="la superficie">

                <label for="lits">lits :</label>
                <input type="number" id="lits" name="lits"  min="1" max="5" placeholder="lits">

                <label for="salle_de_bain">salle de bains :</label>
                <input type="number" id="salle_de_bain" name="salle_de_bains"  min="1" max="5" placeholder="salle de bains">

                <label for="status">Status :</label>
               <select name="status" id="statuts">
                <option value="0" >libre</option> 
                <option value="1" >louer</option> 
                <option value="2" >en travaux</option>               
                </select>
               
                <label for="status">Description :</label>
                <input type="text" id="Description" name="description" placeholder="la Description">

                <label for="prix">Prix :</label>
                <input type="number" id="number" name="prix" placeholder="le prix">

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" placeholder="l'adresse">

                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" placeholder="ville">

                <label for="pays">Pays :</label>
                <input type="text" id="pays" name="pays" placeholder="pays">


                <button type="submit">Ajouter</button>
            </form>
        </div>


        <!-- <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Ajouter un Appartement <span>les plus vendus</span></p>
                    <br />
                    <table>
                        <tr>
                            <th>Appartements</th>
                            <th>Ajouter</th>
                            <th>Supprimer</th>
                        </tr>
                        <tr >
                            <td ><img src="img/pexels-john-tekeridis-1428348.jpg" alt=""></td>
                            <td class="icons"><img src="img/circle-plus-solid.svg" alt=""></td>
                            <td class="icons"><img src="img/circle-minus-solid.svg" alt=""> </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div> -->

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