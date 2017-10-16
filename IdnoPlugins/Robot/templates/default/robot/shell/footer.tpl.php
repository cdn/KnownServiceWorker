
<script>
if (navigator.serviceWorker && navigator.serviceWorker.controller) {
  window.addEventListener('load', function() {
var data = {
  "title": document.querySelector("title").innerText,
  "description": document.querySelector("meta[name='description']").getAttribute("content")
};
    localStorage.setItem(
      window.location.href,
      JSON.stringify(data)
    );
  });
}
</script>
<script src="<?= \Idno\Core\site()->config()->url; ?>IdnoPlugins/Robot/vendor/sw-loader.min.js"></script>
