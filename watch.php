<?php $id = $_GET['video']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Watch Video</title>
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


<div class="video-player">
<iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $id; ?>" frameborder="0" allowfullscreen></iframe>
</div>


</body>
</html>