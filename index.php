<!DOCTYPE html>
<html>
<title>Personal Blog</title>
<link rel="Shortcut icon" type="x-icon" href="icon.png"
<head>
    <style>
    header {
  background-color: #333;
  height: 80px;
  display: flex;
  align-items: center;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-right: 15px;
}

nav li:last-child {
  margin-right: 0;
}

nav a {
  color: #fff;
  text-decoration: none;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  padding: 10px;
  transition: all 0.3s ease;
}

nav a:hover {
  background-color: #fff;
  color: #333;
}

    </style>

</head>
<header>
  <nav>
    <ul>
    <li><a>Personal Blog</a></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<section class="featured-post">
  <h2>Latest Blog Post</h2>
  <img src="featured-post-image.jpg" alt="Featured Post Image">
  <p>Excerpt from the latest blog post...</p>
</section>
