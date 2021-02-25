<?php require 'data.php';?>
<?php require 'helpers.php';?>

<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $lastUriSegment = array_pop($uriSegments);
    $word = null;
    foreach($words as $struct) {
      if ($lastUriSegment == formatUrl($struct->word)) {
        $word = $struct;
        break;
      } else {
			$word = (object) [
				'id' => 0,
				'word' => "Mot inconnu",
				'def' => "Désolé, nous n'avons pas de définition à proposer pour les mots qui n'existent pas dans ce glossaire.",
				'img' => "https://images.unsplash.com/photo-1584824486516-0555a07fc511?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
			];
    }
}?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Définition du mot <?= $word->word; ?></title>
    <meta name="description" content="<?= $word->def; ?>" />
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
          <div class="divider">/</div>
          <a class="section"><?= $word->word; ?></a>
        </div>
        <div class="ui card">
          <div class="image">
            <img alt="<?= $word->word; ?>" src="<?= $word->img; ?>" />
          </div>
          <div class="content">
            <a class="header"><h1><?= $word->word; ?></h1></a>
            <div class="description"><?= $word->def; ?></div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>