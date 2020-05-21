<?php include "include/head.php" ?>

<main>
<!-- mettre par dessus image le texte de description -->

     <div class="container">
         <img src="images/museum2.jpg" alt="fond">

             <div id="intro_color" >

               <p>
                 <?php echo $contenuSite["accueil"]["texte1"] ?>
               </p>
             </div>
     </div>





     <hr>

             <section class="portfolio-experiment">
                       <a>
                         <span class="text">   <h2> <?php echo $contenuSite["accueil"]["titre2"] ?> </h2></span>
                         <span class="line -bottom"></span>
                       </a>
             </section>

     <hr>





     <!-- une oeuvre qui sera tiré au hasard avec description -->
   <div class="container2">

         <img src="images/arty.png" alt="arty">

         <div id="intro_arty" >

<br>
<br>
<br>
<br>


               <div class="animated-title">
                  <div class="text-top">
                    <div>
                      <span><?php echo $contenuSite["accueil"]["animation"] ?></span>
                      <span> <?php echo $contenuSite["accueil"]["animation2"] ?></span>

                    </div>
                  </div>
                  <div class="text-bottom">
                    <div><?php echo $contenuSite["accueil"]["animation3"] ?></div>
                  </div>
                </div>

         </div>

   </div>





   <hr>

           <section class="portfolio-experiment">
                     <a>
                       <span class="text">   <h2> <?php echo $contenuSite["accueil"]["titre3"] ?></h2></span>
                       <span class="line -bottom"></span>
                     </a>
           </section>

   <hr>


   </main>


  <?php include "include/footer.php" ?>
