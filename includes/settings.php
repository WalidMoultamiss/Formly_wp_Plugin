
<?php
global $wpdb;
$myform = $wpdb->get_row("SELECT * FROM wp_formy_fields WHERE id = 1;");
?>

<?php
if (isset($_POST['submit'])) {
  global $wpdb;
  $wpdb->update(
    'wp_formy_fields',

    [
      'options' => $_POST['options'] ?? 'off',
      'buttonSubmit' => $_POST['buttonSubmit'] ?? 'SUBMIT'
    ],

    ['id' => 1]
  );
  
}


?>
<style>
  .checkInput{
    display:flex;
    align-items:center;
    margin-bottom:4px;
    width:205px;
    border:2px solid;
    border-radius:5px
  }
  .img-bg{
    width:60vw;
  }
  /* .wrap{
    
  } */
  .cont{
    background-image: url(../wp-content/plugins/former/public/imgPG.png);
    background-position: left;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    position: relative;
  }
  .formHolder{
    position: absolute;
    top: 183px;
    left: 187px;
    transform: scale(1.5);
  }
  .submitBtn{
    background: radial-gradient(#1fe4f5, #3fbafe);
    outline: none;
    border: rgb(57, 64, 65) 2px solid;
    margin-top: 15px;
    border-radius: 5px;

  }
</style>


<div class="wrap">
<!-- <img class="img-bg" src="../wp-content/plugins/formIt/public/imgPG.png"> -->
<div class="cont">
  <div class="formHolder">
  <h1 style="margin-bottom: 27px;">Formly Plugin</h1>
  <form method="post" action="">
    <div class="checkInput">
      <input id="options" type="checkbox" <?php echo $myform->options=="on" ?  'checked' :  '';  ?>  name="options">
      <label for="options">options</label>
    </div>
    <div>
      <fieldset>
        <p style="margin-bottom: 3px;">custom button</p>
      <!-- <label for="buttonSubmit">custom button</label> -->
      <input id="buttonSubmit" type="text" placeholder="<?php echo $myform->buttonSubmit?>" value="<?php echo $myform->buttonSubmit?>" name="buttonSubmit">
    </fieldset>
    </div>


    <input class="submitBtn" type="submit" name="submit" value="Create my form ✌"/>
  </form>
</div>
</div>
</div>

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



</script>


