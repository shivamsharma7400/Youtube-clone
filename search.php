<?php include 'api/config.php'; ?>
<?php $query = $_GET['q']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search: <?php echo $query; ?></title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<nav class="navbar">
<div class="logo">MyTube</div>
<form action="search.php" method="GET">
<input type="text" name="q" value="<?php echo $query; ?>" placeholder="Search videos...">
<button type="submit">Search</button>
</form>
</nav>


<h2 class="heading">Search Results for "<?php echo $query; ?>"</h2>
<div id="videoContainer" class="video-grid"></div>


<script>
const API_KEY = "<?php echo API_KEY; ?>";
const SEARCH_QUERY = "<?php echo $query; ?>";
</script>
<script src="assets/js/app.js"></script>
<script>loadSearch(SEARCH_QUERY);</script>
</body>
</html>