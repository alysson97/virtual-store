<?php 
include_once "sections/header.php"; 
include_once "components/navbar.php";
include_once "components/card.php";
include_once "db/db.class.php";

$url = 'http://localhost/virtual-store/API/items';
$response = file_get_contents($url);
$data = json_decode($response, true);
navbar();

  

?>
<main>
  <div class="card-container">
    <?php
    if($data){
      foreach($data["data"] as $item){
        card($item['image'], $item['name'], $item['rating'], $item['price']);
      }
}
    ?>
  </div>
</main>


<?php include_once "sections/footer.php";