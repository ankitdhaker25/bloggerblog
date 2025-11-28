<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bloggerblog.com</title>
  <link rel="stylesheet" href="index.css">

  <!-- Meta Tags -->
  <meta name="description" content="Bloggerlog shares practical ideas on how to earn money, start projects, and explore creative solutions.">
  <meta name="keywords" content="Bloggerlog, how to earn, money ideas, blog tips, online income, creative solutions, information hub">
  <meta name="author" content="Bloggerlog by Nitesh">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Bloggerlog - Smart Ideas to Earn and Grow">
  <meta property="og:description" content="Explore Bloggerlog for creative ways to earn money, build blogs, and share useful information.">
  <meta property="og:image" content="https://yourdomain.com/assets/bloggerlog-preview.jpg">
  <meta property="og:url" content="https://yourdomain.com">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bloggerlog - Smart Ideas to Earn and Grow">
  <meta name="twitter:description" content="Discover practical tips and creative strategies to earn money and build your online presence.">
  <meta name="twitter:image" content="https://yourdomain.com/assets/bloggerlog-preview.jpg">
</head>
<body >

  <header>
    <img src="imagebloggerlog.png" alt="Logo" class="logo">
    <h1>Welcome to Bloggerlog</h1>
    <p>Sharing thoughts, code, and creativity</p>
  </header>

  <nav>
    <a href="index.php">Home</a>
    <a href="../about/about.html">About Me</a>
    <a href="">Contact</a>
    <?php 
    session_start();

    if (isset($_SESSION['username'])) {
        echo '<a href="#"> '. htmlspecialchars($_SESSION['username']) . '</a>';
        echo '<a href="logout.php"> Logout </a>';
    } else {
        echo '<a href="../loginpage/login.html">Login</a>';
    }
    ?>

  </nav>

  <div id="topics"><h2>Latest Posts</h2></div>

  <main>
        <h3><a href="../topics/How-to-earn-mony-from-mony.html">How To Earn Money By Investing It </a></h3>
      
        <h3><a href="../topics/How-to-earn-mony-from-mony.html">How To Earn Mony From Youtube</a></h3>
</main>
  <footer>
    &copy; 2025 Bloggerblog | Built with us a lot of curiosity and ideas.
  </footer>

</body>
</html>