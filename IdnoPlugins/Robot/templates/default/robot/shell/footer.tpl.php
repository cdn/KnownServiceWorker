
<script>
if (navigator.serviceWorker && navigator.serviceWorker.controller) {
  window.addEventListener('load', function() {
var times = document.getElementsByTagName('time');
if(times.length == 1) {
var datetime = times[0].getAttribute("datetime");
var dt = new Date(datetime);
var description = document.querySelector("meta[name='description']").getAttribute("content");
var timestamp = dt.getTime();
var title = document.querySelector("title").innerText;
description = (description != title) ? description : '';
var data = {
  "title": title,
  "description": description,
  "published": datetime,
  "time_tip":  times[0].getAttribute("title"),
  "timestamp": timestamp
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
