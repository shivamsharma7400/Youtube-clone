<?php include 'api/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MyTube</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<nav class="navbar">
<div class="logo">MyTube</div>
<form action="search.php" method="GET">
<input type="text" name="q" placeholder="Search videos...">
<button type="submit">Search</button>
</form>
</nav>


<h2 class="heading">Trending Videos</h2>
<div id="videoContainer" class="video-grid"></div>


<script>
const API_KEY = "<?php echo API_KEY; ?>";
</script>
<script src="assets/js/app.js"></script>
<script>loadTrending();</script>
</body>
</html>