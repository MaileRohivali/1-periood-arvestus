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
        <?php  $count = 1;
        foreach ($blog_news as $blog_post){
          if ($count >= 3){
            break;
          }
          $count ++;
            echo $blog_post ["post_title"] . "<br>" ;
            echo $blog_post ["post_excerpt"] . "<br>";
            echo $blog_post ["post_body"] . "<br>"; 
          }
        ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
