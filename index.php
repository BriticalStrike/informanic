<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>B. Liukkonen Portfolio</title>
    <meta name="description" content="Web Portfolio for Brittanee Liukkonen">

    <!-- meta tag for responsive stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--link for page styles-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- Start of main wrapper -->
<div class="wrapper">
    <header class ="banner">
        <?php include('includes/banner-nav.php');?>
</header>
<!--Main Content-->
    <main class="main">
        <h2>About the Site</h2>
        
        <p>Welcome to Informanic, a web portfolio where I, Brittanee Liukkonen, share my journey from MLIS student into data librarianship and analysis, my projects, and favorite learning resources.</p>

        <img src="images/homepic1.jpg" alt="A black and white photo of Brittanee Liukkonen, a woman with glasses smiling at the camera." width="400" height="639">

        <h3>Navigation</h3>
        <p><a href="projects.php" class="site-links">Projects</a>: My current and past work-related projects.</p>
        <p><a href="resources.php" class="site-links">Resources</a>: A collection of some of my most used and favorite online resources including software, books, and websites.</p>
        <p><a href="about.php" class="site-links">About</a>: About me and my journey into LIS and data.</p>
        <p><a href="contact.php" class="site-links">Contact</a>: Contact me directly through my website.</p>
        
    </main>

    <!--Sidebar begins-->
    <aside class="sidebar">
        <?php include('includes/sidebar.php');?>
    </aside>
    <!--Sidebar ends-->
    <footer class="footer">
        <?php include('includes/copyright.php');?>
    </footer>
</div>
<!--end of wrapper-->

</body>
</html>