<!-- à la adactio.com/offline -->
<div class="container result-404">
    <div class="row" style="margin-bottom: 2em; margin-top: 6em">
        <div class="col-md-offset-1 col-md-5">
            <h1 class="p-name" style="margin-bottom: 2em;">
                Offline.
            </h1>
            <p>Whatever you were looking for, it's not here at the moment. It might have been moved, deleted, or it doesn't exist. Or the robots ate it. That's always a possibility too.</p>
            <p>Maybe you'll find something interesting if you head back to the <a href="<?=\Idno\Core\Idno::site()->config()->getDisplayURL()?>"><?=\Idno\Core\Idno::site()->config()->title?> homepage</a>.
            </p>
            <p>There may be some other things to look at:</a>
            <dl id="history">
            </dl>
        </div>
        <div class="col-md-5">
	        <img src="<?=\Idno\Core\Idno::site()->config()->getDisplayURL()?>gfx/robots/aleph_404.png" alt="Robot with a missing sign">
        </div>
    </div>
</div>

<script>
const browsingHistory = [];
caches.open('pages')
.then( cache => {
    cache.keys()
    .then(keys => {
        keys.forEach( request => {
            let data = JSON.parse(localStorage.getItem(request.url));
            if (data) {
                data['url'] = request.url;
                browsingHistory.push(data);
            }
        });
        browsingHistory.sort( (a,b) => {
            return b.timestamp - a.timestamp;
        });
        let markup = '';
        browsingHistory.forEach( data => {
          if(data.url.indexOf('offline') == -1)
            markup += `
<dt><a href="${ data.url }">${ data.title }</a></dt>
<dd>${ data.description }</dd>
<!-- <p class="meta">${ data.published }</p></dd> -->
`;
        });
        let container = document.getElementById('history');
        container.insertAdjacentHTML('beforeend', markup);
    })
});
</script>
