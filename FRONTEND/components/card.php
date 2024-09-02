

<?php
function card($img,$name,$rating,$price){
  echo '<div class="card">
  <img src="'.$img.'" alt="" style="width:250px;">
  <div class="card-information">
  <p class="card-text">'.$name.'</p>
  <p class="rating">'.$rating.'</p>
  <h3 class="princing">R$'.$price.'</h3>
</div>
</div>';
}