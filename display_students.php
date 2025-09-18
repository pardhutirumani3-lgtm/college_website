<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master of Computer Applications</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

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

        .container {
            flex: 1; 
            padding: 10px;
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

        @media (max-width: 992px) {
            .gallery {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 600px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }

            .header h1 {
                font-size: 24px;
                margin-left: 0;
                text-align: center;
                width: 100%;
            }

            nav a {
                display: block;
                margin: 8px auto;
            }
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
        <a href="display_students.php">Students</a>
        <a href="faculty.html">Faculty</a>
        <a href="semister.html">Semisters</a>
        <a href="exampapers.php">Exam Papers</a>
        <a href="pdf.php">pdf's</a>
        <a href="blog.php">Blogs</a>
        <a href="freshersday.html">Freshers Day</a>
        <a href="#">Signature Day</a>
    </nav>
    
    <div class="container">
        <h2>MCA Student's list of CR Reddy Autunomous college.</h2>
        <?php 
        $myconn=mysqli_connect('localhost','root','');
        $db =mysqli_select_db($myconn,'april');
        if(isset($_POST['search'])){
            $sname = $_POST['std_name'];
            $sreg = $_POST['reg_num'];
        }
        $query="SELECT * FROM studentinfo";
        $run = mysqli_query($myconn,$query);
        if (mysqli_num_rows($run) > 0) {
            echo 'Data fetched successfully!<br>';
            echo '<table border="1" cellpadding="10" cellspacing="0" width="100%">';
            echo '<tr><th>S.No</th><th>Student Name</th><th>Register_num</th><th>Course</th><th>College</th></tr>';
            
            while ($row = mysqli_fetch_assoc($run)) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['sno']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Student_name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Register_no']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Course']) . '</td>';
                echo '<td>' . htmlspecialchars($row['College']) . '</td>';
                echo '</tr>';
            }
            
            echo '</table>';
            
                

                // Add other fields as needed
            }
        else {
            echo 'No matching records found.<br>';
        }
        ?>
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
