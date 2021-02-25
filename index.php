<?php require 'data.php';?>
<?php require 'helpers.php';?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Glossaire en php</title>
    <meta name="description" content="Mauris elit neque, fringilla ut justo vel, venenatis ullamcorper turpis. Mauris eget iaculis massa, a elementum diam. In efficitur dignissim sapien non porttitor.">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    />
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-H2BBJWZL4Z"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-H2BBJWZL4Z');
	</script>
  </head>
  <body>
  <section id="main">
      <div class="ui text container">
        <div class="ui breadcrumb">
          <a class="section" href="/glossary">Définitions</a>
        </div>
          <h1 class="ui header">Glossaire</h1>
          <p>Mauris elit neque, fringilla ut justo vel, venenatis ullamcorper turpis. Mauris eget iaculis massa, a elementum diam. In efficitur dignissim sapien non porttitor. Cras ante lorem, viverra id libero et, bibendum interdum purus. Vestibulum tincidunt, ligula at dapibus finibus, dui nulla laoreet enim, et faucibus elit mi vitae erat.</p>
        <div class="ui grid">
          <?php foreach (remove_duplicate($words) as $word) { 
            $letter  = substr($word->word, 0, 1) ?>
             <div class="six wide column">
            <h3 class="ui header"><?= $letter; ?></h3>
            <div class="ui list">
                <?php foreach ($words as $word) { 
                  if (strtolower($letter) == strtolower(substr($word->word, 0, 1))) { ?>
                    <div class="item"><a href="definition/<?= formatUrl($word->word) ?>"><?= $word->word ?></a></div>
                <?php }}?>
          </div>
        </div>
          <?php } ?>
        </div>
        </div>
    </section>
  </body>
</html>