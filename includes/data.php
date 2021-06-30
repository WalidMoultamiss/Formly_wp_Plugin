<?php
global $wpdb;
$myforms = $wpdb->get_results("SELECT * FROM wp_formy_values");

if (isset($_POST['delete'])) {
    global $wpdb;
    $id = $_POST['id'];
    $wpdb->delete('wp_formy_values', array('id' => $id), ['%d']);
    header("location: " . $_SERVER['REQUEST_URI']);
}

?>

<style scoped>


body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.cards__container{
  display:flex;
  justify-content:flex-start;
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

.credit a {
  color: inherit;
}

a,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

a::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

a:hover::after {
  width: 100%;
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

</style>



<div class="cards__container">

  <?php foreach ($myforms as $row): ?>
    <div class="card card-2">
    <div class="card__header">
      <div class="card__icon"><i class="fas fa-envelope-open-text"></i></div>
      <form method="post" action="#">
        <input type="hidden" name="id" value="<?php echo $row->id ?>">
        <button style="background: transparent; border: none;" type="submit" name="delete" class="card__exit"><i class="fas fa-times"></i></button>
      </form>
      </div>
      <div class="card__body">
          <h2 class="text__fields"><?php echo $row->firstName . ' ' . $row->lastName ?></h2>
          <h5 class="text__fields"><?php echo $row->email ?></h5>
          <textarea style="background: transparent;width: 90%;"  class="text__fields"><?php echo $row->textarea ?></textarea>
      </div>
      <p class="card__apply"><a href="#">Send an email <i class="fas fa-arrow-right"></i></a></p>
    </div>
    <?php endforeach;?>

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


