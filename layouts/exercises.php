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
        <?php 
        $total = "12";
        $file_type = ".jpg";
        $img_folder = "http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/" ;
        $start = "1";
        $random = mt_rand($start, $total); 
        $image_name = $random . $file_type; 
        echo "<img src=\"$img_folder/$image_name\" alt=\"$image_name\" />"; 
        ?>
        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
