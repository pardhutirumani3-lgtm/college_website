<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Master of Computer Applications</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

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
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: var(--text-color);
    }

    .header {
      background-color: var(--primary-color);
      color: white;
      padding: 20px;
      text-align: center;
    }

    .header h1 {
      font-size: 36px;
      color: whitesmoke;
    }

    nav {
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

    .container {
      flex: 1;
      padding: 40px;
      max-width: 1000px;
      margin: 30px auto;
      background: linear-gradient(to bottom right, #ffffff, #e9f1fa);
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
      border: 1px solid #d1e3f0;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
    }

    h2 {
      margin-bottom: 20px;
      color: var(--primary-color);
    }

    p {
      margin-bottom: 16px;
      line-height: 1.6;
    }

    h6 {
      margin-top: 30px;
      margin-bottom: 10px;
      font-size:20px;
      color: #555;
    }

    form {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      padding: 20px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
    }

    form input[type="text"] {
      flex: 1 1 300px;
      padding: 12px 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    form button {
      padding: 12px 20px;
      background-color: var(--primary-color);
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    form button:hover {
      background-color: #002040;
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

    @media (max-width: 768px) {
      .header h1 {
        font-size: 24px;
        padding: 0 10px;
      }

      nav a {
        display: block;
        margin: 6px auto;
      }

      .container {
        padding: 20px;
      }

      form {
        flex-direction: column;
        gap: 10px;
      }

      form input[type="text"],
      form button {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>MASTER OF COMPUTER APPLICATIONS</h1>
  </div>
  
  <nav>
    <a href="mca_home.html">Home</a>
    <a href="mca_images.html">Images</a>
    <a href="students.php">Students</a>
    <a href="faculty.html">Faculty</a>
    <a href="semister.html">Semisters</a>
    <a href="exampapers.php">Exam Papers</a>
    <a href="pdf.php">pdf's</a>
    <a href="blog.php">Blogs</a>
    <a href="freshersday.html">Freshers Day</a>
    <a href="#">Signature Day</a>
  </nav>

  <div class="container">
    <h2>Importance of Computer Education to Students</h2>
    <p>In the present age, technology is everywhere, even in the classroom. The modern classroom boasts of audio-visual teaching methods...</p>
    <p><strong>Modernizing education:</strong> The students can keep up with their studies and the teachers can properly plan and teach...</p>
    <p><strong>Improving student performance:</strong> The students who use computers give better performance in their studies...</p>
    <p><strong>Learning job skills:</strong> The most basic jobs involve computers in the modern business world...</p>
    <p><strong>Efficiency:</strong> The learning process gets much simpler and efficient when there is the use of computers...</p>
    <p><strong>Research:</strong> Research has become far easier due to digital formats, online books, and internet access to vast information.</p>

    <h6>Search for CR Reddy College MCA Students by Name or Register Number:</h6>
    <form action="display_students.php" method="GET">
      <input type="text" name="std_name" placeholder="Search for CR Reddy students...">
      <button type="submit" name ="search">Search</button>
    </form>
  </div>

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
