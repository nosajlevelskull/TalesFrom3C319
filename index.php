<?php $content = json_decode(file_get_contents("index.json"),true); ?>
<!DOCTYPE html>
<html>
<head>
<title>Tales from C3 319</title>
<style>
body
{
  background-color: #000;
  color:#FFF;
  font-size: 1.5em;
}
header
{
  font-size: 3em;
}
h2
{
  font-size: 2.5em;
}

section
{
  margin-left: 5em;
  margin-right: 5em;
  padding: 2em;
}

#header_section header
{
  width:100%;
  text-align: center;
  font-size: 4em;
}

.content_section
{
  background-color: #FFF;
  color:#000;
  padding-bottom: 1em;
}
.content_section header
{
  margin-left: 1em;
  margin-right: 1em;
}
.content_section .media
{
  width:40%;
  float:left;
  margin: 1em;
}

</style>
</head>

<body>
  <article id="header_section">
    <header><?php echo $content['header'];?></header>
    <section>
      <?php echo $content['intro'];?>
    </section>
  </article>
  <?php foreach ($content['content'] as $article) { ?>
    <article class="content_section">
      <header><?php echo $article['name']; ?></header>
      <?php foreach ($article['chapters'] as $section) { ?>
        <section>
          <h2><?php echo $section['name']; ?></h2>
          <p><?php echo $section['intro']; ?></p>
          <?php foreach ($section['media'] as $media) { ?>
            <div class="media"><?php echo $media['name']; ?><br>
              <?php if (isset($media['image'])) { ?>  <img src="<?php echo $media['image']; ?>" /> <?php } ?>
            </div>
          <?php } ?>
        </section>
      <?php } ?>
    </article>
  <?php } ?>

</body>
</html>
