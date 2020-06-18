

    <h1>Modification de la page d'accueil</h1>




    <div class="form">
        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
        <form enctype="multipart/form-data" action="formulaire_accueil_reponse.php" method="post">
            <div class="field">
            <input type="text" name="titre" value="<?php echo montrerValeur("TITRE_ACCUEIL")?>" placeholder="Titre du projet" />
            </div>


            <div class="selectdiv">
              <label>
                  <select>
                      <option name="techAccueil" selected> Select Tech </option>
                      <option name="techAccueil"> HTML/CSS </option>
                      <option name="techAccueil"> JavaScript </option>
                      <option name="techAccueil"> PHP </option>
                      <option name="techAccueil"> Wordpress </option>
                      <option name="techAccueil"> Node.JS </option>
                  </select>
              </label>
            </div>


            <textarea name="texteAccueil" rows="20" cols="75"><?php echo montrerValeur("TEXTE_ACCUEIL")?></textarea>

            <!--
            MAX_FILE_SIZE doit précéder le champ input de type file. Il dit la taille maximum du fichier que l'on peut envoyer
            Ce champ n'est pas obligatoire.
             -->
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

            <div class="image_admin">
            <?php echo html_image("images/vrac/accueil.jpg", "mini_image");?>
            </div>

            Image de la page d'accueil : <input name="imageAccueil" type="file"  accept="image/jpeg" />

            <input type="submit" value="Envoyer" />
            <a href="<?php echo PROJET_URL_SITE ?>admin/accueil.php" class="button">Annuler</a>
        </form>









</div>

    </div>
