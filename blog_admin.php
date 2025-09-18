<?php
  $myconn = mysqli_connect('localhost', 'root', '', 'april');

  if (!$myconn) {
    die("Database connection failed: " . mysqli_connect_error());
  }

  if (isset($_GET['action'])) {
    $id=intval($_GET['sno']);
    $action=$_GET['action'];
    if(action==accept){
    mysqli_query($myconn,"update blog set status ='accept' where sno=$id");
    }
    elseif(action==reject){
        mysqli_query($myconn,"update blog set status='reject'where sno=$id");
    }
    elseif(action==delete){
        mysqli_query($myconn,"delete from blog where status='delete'");
    }
  
  header(location:blog_admin.php);
  exit();
}

  if (isset($_POST['submit'])) {
    $post = mysqli_real_escape_string($myconn, $_POST['post']);
    mysqli_query($myconn, "INSERT INTO blog_post (post, status) VALUES ('$post', '$action')");
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MCA Department</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #004080;
      --secondary-color: #f8f9fa;
      --text-color: #333;
      --highlight-color: #ffcc00;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: var(--text-color);
    }

    .header {
      background-color: var(--primary-color);
      color: white;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .header h1 {
      font-size: 50px;
      color: whitesmoke;
      margin-left: 270px;
    }

    nav {
      width: 100%;
      background-color: #003060;
      padding: 10px 0;
      text-align: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      margin: 0 10px;
      padding: 8px 12px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      display: inline-block;
    }

    nav a:hover {
      background-color: var(--highlight-color);
      color: #003060;
    }

    h2 {
      text-align: center;
      margin: 30px 0;
      font-size: 28px;
      color: var(--primary-color);
    }

    form {
      max-width: 800px;
      margin: 0 auto 40px;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    textarea {
      width: 100%;
      height: 253px;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      
      margin-bottom: 15px;
      
    }

    input[type="submit"] {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-left:320px;
    }

    input[type="submit"]:hover {
      background-color: #003060;
      
    }

    footer {
      background-color: var(--primary-color);
      padding: 30px 0 20px;
      text-align: center;
      color: white;
    }

    .social-icons {
      display: flex;
      gap: 15px;
      justify-content: center;
      margin-bottom: 15px;
    }

    .social-icons a {
      text-decoration: none;
      font-size: 20px;
      color: white;
      width: 40px;
      height: 40px;
      background-color: #333;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 0.3s;
    }

    .social-icons a.facebook:hover { background-color: #3b5998; }
    .social-icons a.twitter:hover { background-color: #55acee; }
    .social-icons a.instagram:hover { background-color: #e4405f; }
    .social-icons a.linkedin:hover { background-color: #0077b5; }

    footer p {
      font-size: 14px;
      margin-top: 10px;
      color: whitesmoke;
    }
  </style>
</head>
<body>

  <div class="header">
    <div class="header-left">
      <h1>MASTER OF COMPUTER APPLICATIONS</h1>
    </div>
  </div>

  <nav>
    <a href="mca_home.html">Home</a>
    <a href="mca_images.html">Images</a>
    <a href="#">Students</a>
    <a href="faculty.html">Faculty</a>
    <a href="semister.html">Semisters</a>
    <a href="#">Exam Papers</a>
    <a href="#">Seminars</a>
    <a href="#">Blogs</a>
    <a href="freshersday.html">Freshers Day</a>
    <a href="#">Events</a>
    <a href="#">Signature Day</a>
  </nav>

  <?php
$result = mysqli_query($myconn, "SELECT * FROM blog_post ORDER BY id DESC");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='post'>";
    echo "<p><strong>Post ID:</strong> " . $row['id'] . "</p>";
    echo "<p><strong>Status:</strong> " . $row['status'] . "</p>";
    echo "<p>" . (strlen($row['post']) > 150 ? substr($row['post'], 0, 150) . '...' : $row['post']) . "</p>";
    
    echo "<div class='actions'>";
    echo "<a class='read' href='read.php?id=" . $row['id'] . "'>Read</a>";
    if ($row['status'] == 'pending') {
        echo "<a class='accept' href='admin.php?action=accept&id=" . $row['id'] . "'>Accept</a>";
        echo "<a class='reject' href='admin.php?action=reject&id=" . $row['id'] . "'>Reject</a>";
    }
    echo "<a class='delete' href='admin.php?action=delete&id=" . $row['id'] . "' onclick=\"return confirm('Delete this post?')\">Delete</a>";
    echo "</div></div>";
}
?>

  <footer>
    <div class="social-icons">
      <a href="https://facebook.com" class="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://instagram.com" class="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://linkedin.com" class="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <p>&copy; 2025 Master of Computer Applications. All rights reserved.</p>
  </footer>

</body>
</html>
