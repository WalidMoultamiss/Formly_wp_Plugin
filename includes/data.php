<?php

if (isset($_POST['send-email'])) {
    add_action('wp_mail_failed', function ($error) {
        wp_die("<pre>" . print_r($error, true) . "</pre>");
    });
    $message = '<div style="border:0; margin:0; box-sizing:border-box; font-family: Calibri, sans-serif;width:100%;">
    <table
        style="width: 100%; aspect-ratio: 6 ; background:black; padding:20px; background-position: center; background-size: cover; background-image: url(https://www.seriderm.com/wp-content/uploads/2022/12/Mask-Group-1.png);">
        <tr style="height: 100px;"></tr>
        <tr>
            <td>.</td>
            <td style="color:white; font-size:larger;text-align:center; font-size: 30px;">LEAD THE WAY</td>
            <td>.</td>
        </tr>
    </table>
    <div style="width:100%; background: transparent; position: relative; margin-top: 30px; background-image:url(https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1389.png); background-size: contain; background-position: center;">
        
        <h1 style="width:100%; text-align:center; color:black; font-size:50px;">FÉLICITATIONS !
        </h1>
        <h2 style="width:100%; text-align:center; color:black; font-size:30px ;">Vous venez de réaliser un traitement
            SERIDERM AESTHETIC DERMATOLOGY
        </h2>
        <table style="width:100%;">
            <tr style="width:100%;">
                <td center style="width:50%;">
                    <img style="width:80%; margin-left: 20%;"
                        src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1378.png"
                        alt="two girls side by side">
                </td>
                <td style="width:50%;"></td>
            </tr>
            <td center style="width:50%;  padding:0% 10%;">
                <p style=" font-size: 30px; line-height: 2;">Vous êtes maintenant
                    membre de la communauté
                    Seriderm Aesthtetic
                    Dermatology.
                    <br>
                    Nous vous remercions pour
                    votre confiance
                </p>
                <a style="padding:20px; border:3px solid black; border-radius: 9999px; font-size:30px; text-decoration: none; color:black;"
                    href="https://www.seriderm.com/">
                    En savoir +

                </a>
            </td>
            <td style="width:50%;">
                <img style="width:70%; margin-left: 20%;"
                    src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1379.png"
                    alt="two girls side by side">
            </td>
            </tr>
            <tr style="height: 30px;"></tr>


        </table>
        <table style="width: 100%; padding:0 10%;">
            <tr>
                <td style="width:30%; aspect-ratio: 1;">
                    <img style="width:100%; " style="width:70%; margin-left: 20%;"
                        src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1381.png"
                        alt="two girls side by side">


                </td>
                <td style="height: 30%;">
                    <div style="width:3px; margin-left: calc(100% - 3px); height: 70px; background: #000;"></div>
                    <div style="width:100%; height: 3px; background: #000;"></div>
                    <div style="width:100%;">


                        <a style="color:black; text-decoration: none; text-align: right; float:right; font-size:30px;"
                            href="www.seriderm.com">www.seriderm.com
                        </a>
                    </div>
                </td>
            </tr>
        </table>

    </div>
    <div style="width:100%; background: transparent; position: relative; margin-top: 30px;background-image:url(https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1390.png); background-size: contain; background-position: center; ">
        
        <h1 style="width:100%; text-align:center; color:black; font-size:50px;">BIENVENUE <br>
            DANS L&apos;UNIVERS SERIDERM AD
        </h1>

        <table style="width:100%;  padding: 0 5%;">
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr style="width:100%;">
                <td style="width:50%; padding:20px;  ">
                    <ul>
                        <li style="font-size:30px;">Des protocoles aesthetiques clés en main.
                        </li>
                        <li style="font-size:30px;">
                            Une association des technologies références du
                            marché.
                        </li>
                        <li style="font-size:30px;">
                            Des résultats optimums en 15 jours qui
                            surdimensionne votre expérience patient.
                        </li>

                    </ul>
                </td>
                <td style="width:40%;">
                    <img style="width:80%; margin-right: 20%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1383.png" alt="two girls side by side">
                    
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr style="width:100%;">
                <td style="width:60%; padding:20px;">
                    <h2 style="font-size: 50px;">
                        TOUT SUR NOS ÉVÈNEMENTS
                    </h2>
                    <p style="font-size: 25px; width:80%;">
                        Découvrez nos derniers évènements et partagez
                        les confidences de médecins, journalistes,
                        influenceurs, patients et membres de la team
                        TOUT SUR NOS
                        ÉVÈNEMENTS
                        <b>
                            Seriderm Aesthetic Dermatology.
                        </b>

                    </p>
                </td>
                <td style="width:40%;">
                    <img style="width:80%; margin-right: 20%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1385.png" alt="two girls side by side">

                </td>
            </tr>
        </table>
        <table style="width:100%;">
            <tr style="">
                <td style="padding:0 30%;">
                    <p
                        style="background: #000 ; border-radius: 10px;  padding:10px 20%; color:white; font-size: 25px; text-align: center;">
                        TOUTS&nbsp;A&nbsp;VOIR&nbsp;SUR&nbsp;NOS&nbsp;
                        <br>
                        PROTOCOLES
                    </p>
                </td>
            </tr>
        </table>
        <table style="width:100%; padding:0 10%;">
            <tr style="">
                <td style="width:30%;">
                    <img style="width:100%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1386.png" alt="two girls side by side">

                </td>
                <td style="width:3%;">
                </td>
                <td style="width:30%;">
                    <img style="width:100%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1387.png" alt="two girls side by side">
                </td>
                <td style="width:3%;">
                </td>
                <td style="width:30%;">
                    <img style="width:100%;" style="width:70%; margin-left: 20%;" src="https://www.seriderm.com/wp-content/uploads/2022/12/Capture-decran-1388.png" alt="two girls side by side">
                </td>
            </tr>
            <tr>
                <td style="width:30%;">
                    <p style="font-size: 25px;">
                        Le Genius™ est une technologie offrant
                        un effet volumateur durable et sans
                        injection. Il permet de traiter le
                        relâchement du visage, les rides et
                        ridules, les cicatrices liées à l&apos;acné, le
                        relâchement des zones du corps telles
                        que l&apos;abdomen, les bras, les cuisses
                        mais également les vergetures ainsi
                        que l&apos;hyperhidrose.
                    </p>

                </td>
                <td style="width:3%;">
                </td>
                <td style="width:30%;">
                    <p style="font-size: 25px;">
                        Idéal avant une soirée, un mariage, un
                        événement spécial, l&apos;Hollywood Peel™
                        est une procédure douce et indolore
                        permettant d&apos;unifier votre teint,
                        resserrer vos pores dilatés, réguler le
                        sébum pour les peaux à tendance
                        grasses et purifier les peaux sèches et
                        sensibles sans les agresser.
                    </p>

                </td>
                <td style="width:3%;">
                </td>
                <td style="width:30%;">
                    <p style="font-size: 25px;">
                        Le BabyFace est un traitement qui
                        s&apos;adresse à tous les phototypes, toute
                        l&apos;année.
                        Ce traitement répond aux demandes
                        d&apos;améliorations des imperfections
                        cutanées superficielles : pores dilatés,
                        éclat du teint, irrégularités, ridules,
                        troubles pigmentaires .
                    </p>

                </td>

            </tr>
        </table>
        <br>
        <br>
        <br>
        <table style="width:100%;">
            <tr>
                <td style=" text-align: center;">
                    <a style="padding:20px; border:3px solid black; border-radius: 9999px; font-size:30px; text-decoration: none; color:black;"
                        href="https://www.seriderm.com/">
                        En savoir +
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <table style="width:100%; padding: 20px 0; background:black;">
        <tr>
            <td>
            <td style="width:40%;">
            </td>
            <td style=" text-align:center;">
                <a style="width:40px; height:40px;" href="https://www.youtube.com/@seridermaestheticdermatology">
                    <div
                        style="border-radius:9999px; border:2px solid white; width:40px; height:40px; background-position: center; background-size: 110%;background-image: url(https://e7.pngegg.com/pngimages/163/425/png-clipart-youtube-computer-icons-logo-subscribe-angle-desktop-wallpaper.png); ">
                    </div>
                </a>
            </td>
            <td style=" text-align:center;">
                <a style="width:40px; height:40px;"
                    href="https://www.facebook.com/people/Seriderm-Aesthetic-Dermatology/100088058235789/">
                    <div
                        style=" border-radius:9999px; border:2px solid white; width:40px; height:40px; background-position: center; background-size: cover;background-image: url(https://assets.stickpng.com/images/60fea6c83d624000048712b7.png); ">
                    </div>
                </a>
            </td>
            <td style=" text-align:center;">
                <a style="width:40px; height:40px;" href="https://www.instagram.com/seriderm_aestheticdermatology/?hl=fr">
                    <div
                        style="border-radius:9999px; background-color: white; border:2px solid white; width:40px; height:40px; background-position: center; background-size: cover;background-image: url(https://w7.pngwing.com/pngs/362/366/png-transparent-camera-illustration-logo-computer-icons-instagram-logo-miscellaneous-art-line.png); ">

                    </div>
                </a>
            </td>
            <td style=" text-align:center;">
                <a style="width:40px; height:40px;" href="https://www.linkedin.com/company/seriderm-aesthetic-dermatology/">
                    <div
                        style=" border-radius:9999px;background-color: white ; border:2px solid white; width:40px; height:40px; background-position: center; background-size: cover;background-image: url(https://cdn.icon-icons.com/icons2/2428/PNG/512/linkedin_black_logo_icon_147114.png); ">
                    </div>
                </a>
            </td>
            <td style="width:40%;">

            </td>
            </td>

        </tr>
    </table>

</div>';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    add_filter('wp_mail_content_type', function( $content_type ) {
      return 'text/html';
});
    $v = wp_mail($_POST['send-email'], 'Creation de compte Seriderm.', $message, $headers);
}

global $wpdb;

if (isset($_POST['delete-user'])) {

    $id = $_POST['delete-user'];
    $table = 'wp_formy_values';
    $wpdb->delete($table, array('id' => $id));
    wp_delete_user($id, $reassign = null);

}

$myforms = $wpdb->get_results("SELECT * FROM wp_formy_values");

?>



<style scoped>





body {

  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,

    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";

}



.cards__container{



}

.heading-container {

  text-align: center;

}



.heading {

  font-weight: 600;

}



.credit {

  margin: 10px 0px;

  color: #888888;

  font-size: 25px;

  transition: all 0.5s;

}





.main-container {

  padding: 30px;

}



.card-container {

  display: flex;

  flex-wrap: wrap;

  justify-content: space-between;

}



.card__header{

  display:flex;

  min-width: 450px;

  justify-content: space-between;

}





.card {

  margin: 20px;

  padding: 20px;

  width: 500px;

  min-width: 500px;

  min-height: 200px;

  height:max-content;

  border-radius: 10px;

  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);

  transition: all 0.5s;

}



.card:hover {

  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);

  transform: scale(1.01);

}



.card__exit {

  grid-row: 1/2;

  justify-self: end;

}



.card__icon {

  grid-row: 2/3;

  font-size: 30px;

}



.card__title {

  grid-row: 3/4;

  font-weight: 400;

  color: #ffffff;

}



.card__apply {

  margin-top: 10px;

}



.card__body{

  height: fit-content;

  margin-top: 10px;

  display: row;

  color: white;

}



.text__fields{

  color: white;

}



.card-2 {

  background: radial-gradient(#1fe4f5, #3fbafe);

}



.card-1 {

  background: radial-gradient(#fbc1cc, #fa99b2);

}



.card-3 {

  background: radial-gradient(#76b2fe, #b69efe);

}



.card-4 {

  background: radial-gradient(#60efbc, #58d5c9);

}



.card-5 {

  background: radial-gradient(#f588d8, #c0a3e5);

}



@media (max-width: 1600px) {

  .card-container {

    justify-content: center;

  }

}



tr:hover{

  background: #00000030;

}



.heading-formly{

  display:flex;

  width:100%;

  justify-content:space-between;

}



.a-form-export{

  background:#000 !important;

  color:white !important;

  padding:5px;

  border-radius:5px;

  display:flex;

  align-items:center;

  margin-right: 20px;

}





</style>







<div class="cards__container">

  <div class="heading-formly">

    <h1>la base de données</h1>

    <div class="a-form-export">

      <a style="color:white;" className="a-form-export" href="#" onclick="download_table_as_csv('my_id_table_to_export');">Download as CSV</a>

    </div>

  </div>

<table

id="table#1"

>

  <tr>

    <th style="padding:0px 15px;">Nom</th>

    <th style="padding:0px 15px;">Prenom</th>

    <th style="padding:0px 15px;">Email</th>

    <th style="padding:0px 15px;">Coffret n°</th>

    <th style="padding:0px 15px;">Telephone</th>

    <th style="padding:0px 15px;">Tranche d'age</th>

    <th style="padding:0px 15px;">Crée le</th>

    <th style="padding:0px 15px;">Action</th>

  </tr>





  <?php foreach ($myforms as $row): ?>

    <tr>

      <td style="padding:0px 15px;"><?php echo $row->nom ?></td>

      <td style="padding:0px 15px;"><?php echo $row->prenom ?></td>

      <td style="padding:0px 15px;"><?php echo $row->email ?></td>

      <td style="padding:0px 15px;"><?php echo $row->coffret ?></td>

      <td style="padding:0px 15px;"><?php echo $row->phone ?></td>

      <td style="padding:0px 15px;"><?php echo $row->age ?></td>

      <td style="padding:0px 15px;"><?php echo $row->creation_time ?></td>


      <td style="padding:0px 15px;">

      <form  action="" method="post">

        <input type="hidden" name="delete-user" value="<?php echo $row->id ?>" >

        <button style="color:red; border:0px; background:transparent;" type="submit">

        Supprimer

        </button>

      </form>
      <form  action="" method="post">

        <input type="hidden" name="send-email" value="<?php echo $row->email ?>" >

        <button style="color:blue; border:0px; background:transparent;" type="submit">

        send email

        </button>

      </form>

    </td>

    </tr>

    <?php endforeach;?>

</table>



<script>

  // Quick and simple export target #table_id into a csv

function download_table_as_csv(table_id, separator = ';') {

    // Select rows from table_id

    var rows = document.querySelectorAll('#table\\#' + 1 + ' tr');

    // Construct csv

    var csv = [];

    for (var i = 0; i < rows.length; i++) {

        var row = [], cols = rows[i].querySelectorAll('td, th');

        for (var j = 0; j < cols.length; j++) {

            // Clean innertext to remove multiple spaces and jumpline (break csv)

            var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')

            // Escape double-quote with double-double-quote (see https://stackoverflow.com/questions/17808511/properly-escape-a-double-quote-in-csv)

            data = data.replace(/"/g, '""');

            // Push escaped string

            row.push('"' + data + '"');

        }

        csv.push(row.join(separator));

    }

    var csv_string = csv.join('\n');

    // Download it

    var filename = 'export_' + table_id + '_' + new Date().toLocaleDateString() + '.csv';

    var link = document.createElement('a');

    link.style.display = 'none';

    link.setAttribute('target', '_blank');

    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));

    link.setAttribute('download', filename);

    document.body.appendChild(link);

    link.click();

    document.body.removeChild(link);

}

</script>



</div>













<!--

<script>



let chicky = document.querySelectorAll('input[type=checkbox]');





chicky.forEach(element => {

  element.addEventListener('change',()=>{

  if (ischecked()) {

  document.querySelector('input[type=submit]').removeAttribute('disabled');

}else{

  document.querySelector('input[type=submit]').setAttribute('disabled',true);



}

});

});





function ischecked() {

  return [...chicky].some(e=>e.checked);

}



if (!ischecked()) {

  document.querySelector('input[type=submit]').setAttribute('disabled',true);

}







</script> -->





