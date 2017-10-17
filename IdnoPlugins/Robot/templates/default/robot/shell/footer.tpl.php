
<script>
if (navigator.serviceWorker && navigator.serviceWorker.controller) {
  window.addEventListener('load', function() {
var times = document.getElementsByTagName('time');
if(times.length == 1) {
var description = document.querySelector("meta[name='description']").getAttribute("content");
var title = document.querySelector("title").innerText;
description = (description != title) ? description : '';
var data = {
  "title": title,
  "description": description,
  "published": times[0].getAttribute("datetime"),
  "time_tip":  times[0].getAttribute("title")
};
    localStorage.setItem(
      window.location.href,
      JSON.stringify(data)
    );
}
  });
}
</script>
<script src="<?= \Idno\Core\site()->config()->url; ?>IdnoPlugins/Robot/vendor/sw-loader.min.js"></script>
