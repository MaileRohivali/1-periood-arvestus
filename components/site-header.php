<header id="site-header">
  <div class="site-title">
    <h1><?php $site_title = 'Arvestustöö';
    echo $site_title;
    ?></h1>
  </div>

  <nav class="menu-main">
    <ul class="menu">
      <?php  
       foreach ($menu_main as $attribute => $value ) {
            echo "<li><a href='$value'>{$attribute}</a></li>";
          };
      ?>
    </ul>
  </nav>
</header>
