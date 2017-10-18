<!-- a c main.tpl -->
<script>
// adactio localStorage magick

if (navigator.serviceWorker && navigator.serviceWorker.controller) {
  window.addEventListener('load', function() {
    var description = document.querySelector("meta[name='description']").getAttribute("content");
    var title = document.querySelector("title").innerText;
    description = (description != title) ? description : '';

<?php
  $title = htmlentities(strip_tags($vars['object']->title), ENT_QUOTES, 'UTF-8');
?>
    var data = {
      "title": title,
      "description": description,
      "published": "<?= strftime('%d %b %Y', $vars['object']->created) ?>",
      "datetime": "<?= date(DATE_ISO8601, $vars['object']->created) ?>",
      "timestamp": "<?= strftime('%s', $vars['object']->created) ?>"
    };

    localStorage.setItem(
      window.location.href,
      JSON.stringify(data)
    );
  });
}

</script>
