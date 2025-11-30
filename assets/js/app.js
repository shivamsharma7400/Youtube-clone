function loadTrending() {
fetch(`https://www.googleapis.com/youtube/v3/videos?part=snippet&chart=mostPopular&maxResults=20&key=${API_KEY}`)
.then(r => r.json())
.then(d => displayVideos(d.items));
}


function loadSearch(q) {
fetch(`https://www.googleapis.com/youtube/v3/search?part=snippet&type=video&maxResults=20&q=${q}&key=${API_KEY}`)
.then(r => r.json())
.then(d => displayVideos(d.items));
}


function displayVideos(videos) {
const c = document.getElementById("videoContainer");
c.innerHTML = "";


videos.forEach(v => {
const vid = v.id.videoId || v.id;
c.innerHTML += `
<div class='video-card' onclick="location.href='watch.php?video=${vid}'">
<img src="${v.snippet.thumbnails.high.url}">
<div class='video-info'>
<h3>${v.snippet.title}</h3>
<p>${v.snippet.channelTitle}</p>
</div>
</div>
`;
});
}