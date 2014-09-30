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
        <?php echo team_member ('Kaspar Naaber', 'kaspar.naaber@khk.ee', 'Arvutid'); ?>
        <?php echo team_member ('Peeter Kartul', 'peeter.kartul@khk.ee', 'Jalgrattad'); ?>
        <?php echo team_member ('Erki Nool', 'erki.nool@khk.ee', 'Jalgpall'); ?>
        <?php echo team_member ('Timo Tigu', 'timo.tigu@khk.ee', 'Raamatud'); ?>
        <?php echo team_member ('Silver Kuu', 'silver.kuu@khk.ee', 'Peod'); ?>
        <?php echo team_member ('Tauno Päike', 'tauno.paike@khk.ee', 'Kalastamine'); ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
