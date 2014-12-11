<div class="container">
  <div class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <?php
        for ($i = 1; $i <= 12; $i ++) {
          if($i == 1) {
            $class = "active item";
          } else {
            $class = "item";
          }

          echo "<div class=\"" . $class . "\">";
          echo "<img src='/img/" . $i . ".jpg' alt=''>";
          echo "</div>";
        }
      ?>
    </div>
  </div>
</div>
