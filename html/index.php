<div class="container">
  <div class="row section">
    <div class="span10 offset1">
      <div id="myCarousel" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
          <?php
            for ($i = 0 ; $i < 8 ; $i ++){
              if($i == 0)
                $class = "active item";
              else
                $class = "item";

              echo "<div class=\"" . $class . "\">";
              echo "</div>";
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row section">

    <div class="span4">
      <h3>Clients</h3>
      <p>Design-Build Developers</p>
      <h3>Focus</h3>
      <p>Multi-Family Wood Frame Construction</p>
    </div>
    <div class="span4">
      <div style="padding-left:40px">
        <h3>Partnership</h3>
        <p>We incorporate our experience in structural engineering and construction to provide a code-compliant and buildable set of construction documents.  We understand the need for an efficient design that will perform.</p>
      </div>
    </div>
    <div class="span2 offset2">
      <h3>Services</h3>
      <ul>
        <li>Master Planning</li>
        <li>Budget Analysis</li>
        <li>Bank Packages</li>
        <li>Architecture</li>
        <li>Structural Engineering</li>
        <li>Material Take-Offs</li>
      </ul>
    </div>
  </div>
</div>
