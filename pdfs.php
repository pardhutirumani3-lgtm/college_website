<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Authentic Academy Coaching Center</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)),
                  url('https://images.unsplash.com/photo-1584697964233-ff3f8e7be4de?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    
    .header {
      background-color: #005792;
      color: white;
      padding: 30px 20px;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
      letter-spacing: 1.5px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

   
    .navbar nav {
      display: flex;
      justify-content: center;
      gap: 20px;
      background-color: #003c5d;
      padding: 15px 0;
    }

    .navbar nav a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
      transition: color 0.3s ease;
    }

    .navbar nav a:hover {
      color: #ffdd57;
    }
    footer {
      background-color: #005792;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .social-icons {
      margin-bottom: 10px;
    }

    .social-icons a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-size: 20px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #ffdd57;
    }

    .copyright {
      font-size: 14px;
      color: #e0e0e0;
    }

    
    @media (max-width: 768px) {
      .navbar nav {
        flex-direction: column;
        gap: 10px;
      }

      .container {
        padding: 20px;
      }

      .container p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="header">
    AUTHENTIC ACADEMY COACHING CENTER
  </div>

  <div class="navbar">
    <nav>
      <a href="">Home</a>
      <a href="">Images</a>
      <a href="">About</a>
      <a href="">Courses</a>
      <a href="">Contact</a>
    </nav>
  </div>

  

  <footer>
    <div class="social-icons">
      <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <div class="copyright">
      &copy; 2025 Authentic Academy Coaching Center. All Rights Reserved.
    </div>
  </footer>
</body>
</html>
