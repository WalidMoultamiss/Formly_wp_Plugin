

<?php


$hasCreate = true;

global $wpdb;

$myform = $wpdb->get_row("SELECT * FROM wp_formy_fields WHERE id = 1;");

$current_user = wp_get_current_user();

if ($current_user->ID) {

    if (strlen($current_user->data->user_login) >= 3) {

        $hasCreate = false;

    } else {

        $hasCreate = true;

    }

} else {

    $hasCreate = true;

}

?>





<?php if ($hasCreate) {?>

<style>

  <?php include_once 'public/formy.css';?>

</style>



<main class="overlay-main">

    <div class="form_formly toShow">

        <form class="" method="POST" action="">

            <div class="mb-3">

                <?php

    global $err_plg;

    ?>



                <?php if (strlen($err_plg) > 0) {?>



                <strong style="color:red;">

                    <?php echo $err_plg; ?>

                </strong>



                <?php }?>



                <div style="width:100%; display:flex; justify-content:space-between; align-items:center;" class="">
                  <h2 style="font-size:2rem; font-weight:bold;" class="">
                    Félicitations !
                  </h2>
                  <div class="elementor-shortcode"><!-- GTranslate: https://gtranslate.io/ -->
                <a href="https://seriderm.com" onclick="doGTranslate('fr|fr');return false;" title="French" class="glink nturl notranslate"><img src="//seriderm.com/wp-content/plugins/gtranslate/flags/svg/fr.svg" height="24" width="24" alt="French"></a><a href="https://seriderm.com/en/" onclick="doGTranslate('fr|en');return false;" title="English" class="glink nturl notranslate"><img src="//seriderm.com/wp-content/plugins/gtranslate/flags/svg/en.svg" height="24" width="24" alt="English"></a>
                <style>a.glink img {margin-right:2px;}</style>
                <script>
                function doGTranslate(lang_pair) {if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(typeof ga=='function'){ga('send', 'event', 'GTranslate', lang, location.pathname+location.search);}var plang=location.pathname.split('/')[1];if(plang.length !=2 && plang != 'zh-CN' && plang != 'zh-TW' && plang != 'hmn' && plang != 'haw' && plang != 'ceb')plang='fr';if(lang == 'fr')location.href=location.protocol+'//'+location.host+gt_request_uri;else location.href=location.protocol+'//'+location.host+'/'+lang+gt_request_uri;}
                </script>
                </div>
                </div>
                <div class="">
                  <button class="jaiuncompte" type="button" onclick="toHide()">
                    
                  Créer un compte
                  
                </button>
                
              </div>
                <p>Vous venez d'entrer dans l'univers Seriderm Aesthetic Dermatology!
                    <img style="width:127.994px;height:63.991;"
                        src="https://www.lutronicpbsfrance.com/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-15-at-15.36.03-300x150.jpeg"
                        alt="univers">
                </p>
                <p>
                Découvrez des maintenant nos protocoles et routines à adopter en remplissant ce formulaire pour accéder au site :
                </p>

                



                <div class="mb-3">

                    <label for="email" class="form-label">Email <b style="color:red;">*</b></label>

                    <input onchange='WhileChangeInputs()' style="outline: none;border-radius: 5px;" type="email"

                        required name="email" class="form-control" id="email" aria-describedby="coffret">

                </div>

                <div class="mb-3">

                    <label for="password" class="form-label">Mot de passe <b style="color:red;">*</b></label>

                    <input required min="5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onchange='WhileChangeInputs()' style="outline: none;border-radius: 5px;"

                        type="password" name="password" class="form-control" id="password" aria-describedby="password">

                    <div id="weak" class="form-text">Le mot de passe doit contenir au moins 8 caractères dont un caractère en majuscule et un numéro.

                    </div>

                </div>



                <button type="submit" name="submit_login" id='btn-submit-login' class="jaiuncompte toShow w-100">

                Envoyer

                </button>

            </div>

        </form>

    </div>

    <div class="form_formly toHide">

        <form class="" method="POST" action="">

            <?php

    global $err_plg;

    if (strlen($err_plg) > 0) {

        ?>

            <strong style="color:red;">

                <?php echo $err_plg; ?>

            </strong>

            <?php }?>



            <div style="width:100%; display:flex; justify-content:space-between; align-items:center;" class="">
                  <h2 style="font-size:2rem; font-weight:bold;" class="">
                    Félicitations !
                  </h2>
                  <div class="elementor-shortcode"><!-- GTranslate: https://gtranslate.io/ -->
                <a href="https://seriderm.com" onclick="doGTranslate('fr|fr');return false;" title="French" class="glink nturl notranslate"><img src="//seriderm.com/wp-content/plugins/gtranslate/flags/svg/fr.svg" height="24" width="24" alt="French"></a><a href="https://seriderm.com/en/" onclick="doGTranslate('fr|en');return false;" title="English" class="glink nturl notranslate"><img src="//seriderm.com/wp-content/plugins/gtranslate/flags/svg/en.svg" height="24" width="24" alt="English"></a>
                <style>a.glink img {margin-right:2px;}</style>
                <script>
                function doGTranslate(lang_pair) {if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(typeof ga=='function'){ga('send', 'event', 'GTranslate', lang, location.pathname+location.search);}var plang=location.pathname.split('/')[1];if(plang.length !=2 && plang != 'zh-CN' && plang != 'zh-TW' && plang != 'hmn' && plang != 'haw' && plang != 'ceb')plang='fr';if(lang == 'fr')location.href=location.protocol+'//'+location.host+gt_request_uri;else location.href=location.protocol+'//'+location.host+'/'+lang+gt_request_uri;}
                </script>
                </div>
                </div>
            <button class="jaiuncompte toHide" type="button" onclick="toHide()">

                J'ai déja un compte

            </button>

            <button class="jaiuncompte toShow" type="button" onclick="toHide()">

                Créer un compte

            </button>
                <p>Vous venez d'entrer dans l'univers Seriderm Aesthetic Dermatology!
                    <img style="width:127.994px;height:63.991;"
                        src="https://www.lutronicpbsfrance.com/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-15-at-15.36.03-300x150.jpeg"
                        alt="univers">
                </p>
                <p>
                Découvrez des maintenant nos protocoles et routines à adopter en remplissant ce formulaire pour accéder au site :
                </p>

            


            <?php if ($myform->options == 'on') {?>

            <div class="mb-3 toHide">

                <label for="nom" class="form-label">Nom Complet&nbsp;<b style="color:red;">*</b></label>

                <div class="row_form">

                  
                  <div class="row_item_form">
                    <input required onchange='WhileChangeInputs()' style="outline: none;border-radius: 5px;"
                    type="text" name="nom" class="form-control toHide" id="nom" aria-describedby="nom">
                    <div id="" class="form-text">Nom de famille</div>
                  </div>
                  <div class="row_item_form">

                      <input required onchange='WhileChangeInputs()' style="outline: none;border-radius: 5px;"

                          type="text" name="prenom" class="form-control toHide" id="prenom" aria-describedby="prenom">

                      <div id="" class="form-text">Prénom</div>

                  </div>

                </div>

            </div>

            <div class="mb-3 toHide">

                <label for="coffret" class="form-label">Coffret N° <b style="color:red;">*</b></label>
                <input required onchange='WhileChangeInputs()' style="outline: none;border-radius: 5px;"  type="text"
                    name="coffret" class="form-control toHide" id="coffret" aria-describedby="coffret">
                    <div id="" class="form-text">Votre n° coffret se situe en bas de page, sous le QR code de votre leafletl/ brochure</div>
            </div>
            <div class="mb-3 toHide">
                <label for="age" class="form-label">Dans quelle tranche d'âge vous trouvez-vous ? <b

                        style="color:red;">*</b></label>

                <select class="form-control" name="age" id="age">
                    <option selected value="16-25">16-25 ans</option>
                    <option  value="26-35">26-35 ans</option>
                    <option value="36-45">36-45 ans</option>
                    <option value="46-59">46-59 ans</option>
                    <option value="60+">60 ans et+</option>

                </select>

            </div>

            <div class="mb-3 toHide">

                <div class="mb-3 ">

                    <label for="email" class="form-label">Email <b style="color:red;">*</b></label>

                    <input onchange='WhileChangeInputs()' style="outline: none;border-radius: 5px;" type="email"

                        required name="email" class="form-control " id="email" aria-describedby="coffret">

                </div>

                <div class="mb-3 toHide">

                    <label for="password" class="form-label">Mot de passe <b style="color:red;">*</b></label>

                    <input required min="5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onchange='WhileChangeInputs()' style="outline: none;border-radius: 5px;"

                        type="password" name="password" class="form-control" id="password" aria-describedby="coffret">

                    <div id="weak" class="form-text">Le mot de passe doit contenir au moins 8 caractères dont un caractère en majuscule et un numéro.</div>

                </div>

                <div class="mb-3 toHide">

                    <label for="telephone" class="form-label toHide">Téléphone <b style="color:red;">*</b></label>

                    <input required onchange='WhileChangeInputs()' style="outline: none;border-radius: 5px;"

                        type="number" name="phone" class="form-control" id="telephone" aria-describedby="telephone">

                </div>

                <div class="mb-3 toHide">

                    <span>

                        <input required class="" style="max-width:20px;" onchange='WhileChangeInputs()'

                            type="checkbox" id="politics">

                        <label for="politics" class="form-label ">Je confirme avoir lu et accepté la politique de

                            confidentialité</label>

                    </span>

                </div>

                <div class="mb-3 toHide">

                    <a href="https://seriderm.com/mentions-legales/">Mentions

                        légales et politique de confidentialité</a>

                </div>

                <?php }?>



                <button type="submit" name="submit_register" id='btn-submit' class="jaiuncompte toHide w-100">

                    Envoyer

                </button>

        </form>

    </div>

            </main>

            <script>

              let toCheck = ['nom' , 'prenom' , 'coffret' , 'email' , 'password' , 'telephone' , 'politics'];



              function toHide(){

                WhileChangeInputs();

                if(toCheck.length == 7 ){

                  toCheck = ['email' , 'password'];

                }else{

                  toCheck = ['nom' , 'prenom' , 'coffret' , 'email' , 'password' , 'telephone' , 'politics']

                }

                [...document.querySelectorAll('.toShow')].forEach(e=>{

                    if(e.style.display == 'none' || e.style.display == ''){

                      e.style.display = 'block'

                      e.required = true;

                    } else {

                      e.required = false;

                      e.style.display ='none';

                    }

                });

                [...document.querySelectorAll('.toHide')].forEach(e=>{

                  if(e.style.display == 'none'){

                    if(e.type === 'checkbox'){

                      e.style.display = 'flex';

                    }else{

                      e.style.display = 'block';

                    }

                      e.required = true;

                    console.log(e);

                }else{

                  e.style.display ='none'

                  e.required = false;

                }

                  console.log(e);

              });

            }



            function ValidateEmail(mail)

            {

             if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))

              {

                return (true)

              }

                return (false)

            }



            const isPasswordSecure = (password) => {

                const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");

                return re.test(password);

            };



            const btnSubmitLogin = document.querySelector("#btn-submit-login");

            const btnSubmit = document.querySelector("#btn-submit");

            const disableSubmits = (value)=>{

              btnSubmit.style.opacity = value ? 0.5 : 1;

              btnSubmitLogin.style.opacity = value ? 0.5 : 1;

            }



            function WhileChangeInputs(){

              disableSubmits(true);



              toCheck?.map(e=>{

                if(e === 'email'){

                  const Email = document.querySelector('#email')

                  if(ValidateEmail(Email.value)){

                    console.log('email valid');

                    disableSubmits(false);



                  }else{

                    console.log('email non valid');

                    disableSubmits(true);



                  }

                }

                if(e === 'password'){

                  const Password = document.querySelector('#password')

                  if(isPasswordSecure(Password.value)){

                    console.log('password strong');

                    disableSubmits(false);



                  }else{

                    console.log('password weak');

                    document.querySelector('#weak').style.color = 'red'

                    disableSubmits(true);



                  }

                }

                if(e === 'nom'){

                  const Nom = document.querySelector('#nom');

                  if(Nom.value.length > 2){

                    console.log('nom valide');

                    disableSubmits(false);



                  }else{

                    console.log('nom NON valide');

                    disableSubmits(true);





                  }

                }

                if(e === 'prenom'){

                  const Prenom = document.querySelector('#prenom');

                  if(Prenom.value.length > 2){

                    console.log('prenom valide');

                    disableSubmits(false);

                  }else{

                    console.log('prenom non valide');

                    disableSubmits(true);

                  }

                }



                if(e === 'coffret'){

                  const Coffret  = document.querySelector('#coffret');

                  if(Coffret.value.length > 5){

                    console.log('coffret valide');

                    disableSubmits(false);

                  }else{

                    console.log('coffret non valide');

                    disableSubmits(true);

                  }

                }

                if(e === 'telephone'){

                  const Phone  = document.querySelector('#telephone');

                  if(Phone.value.length > 9){

                    console.log('telephone valide');

                    disableSubmits(false);

                  }else{

                    console.log('telephone non valide');

                    disableSubmits(true);

                  }

                }



                if(e === 'politics'){

                  const politics  = document.querySelector('#politics');

                  if(politics.checked){

                    console.log('is checked');

                    disableSubmits(false);

                  }else{

                    disableSubmits(true);

                  }

                }

              })

            }

            </script>

<?php }?>

<?php return ''?>