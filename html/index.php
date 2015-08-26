<div class="container">
  <div class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <?php
        $json = file_get_contents("http://plansource.io/ve_pictures/all");
        $urls = json_decode($json, true)["urls"];
        for ($i = 0; $i < count($urls); $i++) {
          if($i == 0) {
            $class = "active item";
          } else {
            $class = "item";
          }

          echo "<div class=\"" . $class . "\">";
          echo "<img src='" . $urls[$i] . "' alt=''>";
          echo "</div>";
        }
      ?>
    </div>
  </div>
</div>
