<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <!--  Sisesta siia kood -->
        <?php $number = rand(100 , 200);
          if ($number < 150) {
            echo "Juhuslik number {$number} on väiksem kui 150";
          } else {
            echo "Juhuslik number {$number} on suurem kui 150";
          }
        ?>

        <h2>Juhuslik pilt</h2>
        <!--  Sisesta siia kood -->
        <img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/<?php echo rand(1,12);?>.jpg" alt="Random Image" /> 
       
        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
        <?php  "http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/";
        for ($image = 1; $image <= 12; $image ++) {
         echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.$image.'.jpg" alt="Random Image" />';
        }
        ?> 
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
