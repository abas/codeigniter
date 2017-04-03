<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>


<?php foreach ($news as $news_item) { ?>
  <h1><?php echo $news_item['title']; ?></h1>
  <h4><?php echo $news_item['text']; ?></h4>
  <p>
    <?php echo $news_item['slug'] ?>
  </p>
<?php } ?>
  <h1><?php echo $test; ?></h1>
  <p>
    <?php echo $check; ?>
  </p>
</body>
</html>
