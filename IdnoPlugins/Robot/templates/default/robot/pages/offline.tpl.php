<!-- à la adactio.com/offline -->
<h1>Something is Offline</h1>

<p>There’s an issue with connectivity…</p>

<p>Here’s something to look at:</p>

<div id="history">
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
<h2><a href="${ data.url }">${ data.title }</a></h2>
<p>${ data.description }</p>
<!-- <p class="meta">${ data.published }</p> -->
`;
        });
        let container = document.getElementById('history');
        container.insertAdjacentHTML('beforeend', markup);
    })
});
</script>
