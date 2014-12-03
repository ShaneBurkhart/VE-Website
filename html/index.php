<div class="container">
  <div class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <?php
        for ($i = 0 ; $i < 8 ; $i ++){
          if($i == 0)
            $class = "active item";
          else
            $class = "item";

          echo "<div class=\"" . $class . "\">";
          echo "<img src='/img/" . $i . ".jpg' alt=''>";
          echo "</div>";
        }
      ?>
    </div>
  </div>
</div>
