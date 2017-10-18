<!-- a c main.tpl -->
<script>
// adactio localStorage magick

if (navigator.serviceWorker && navigator.serviceWorker.controller) {
  window.addEventListener('load', function() {
/*    var data = {
      "title": "A minority report on artificial intelligence",
      "description": "Revisiting Spielberg’s films after a decade and a half.",
      "published": "May 7th, 2017",
      "timestamp": "1494171049"
    };

 vs

var data = {
  "title": "A year with Lithium",
  "description": "Following another round of inverter issues, ...",
  "published": "2017-10-19T13:15:00+0000",
  "time_tip": "19 Oct 2017",
 // "timestamp": timestamp
};

*/
    localStorage.setItem(
      window.location.href,
      JSON.stringify(data)
    );
  });
}

</script>
