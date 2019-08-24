<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Projects | B. Liukkonen Portfolio</title>
    <meta name="description" content="Brittanee Liukkonen's work-related online projects.">

    <!-- meta tag for responsive stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--link for page styles-->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/fetch.js"></script>

</head>

<body>

<!-- Start of main wrapper -->
<div class="wrapper">
    <header class ="banner">
        <?php include('includes/banner-nav.php');?>
    </header>
<!--Main Content-->
    <main class="main">
        <h2>Projects</h2>

        <h3>LIS-Related Projects</h3>

            <h4>Podcast</h4>
            <div class="media">
            <iframe scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/483487485%3Fsecret_token%3Ds-jR2RS&color=%23947c7c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            </div>
            <p>Informanic Ep. 1 is a podcast I created for a school project. It is an overview on the requirements to become a data professional, what data professionals do, and what skills data professionals need to possess to make it in the field. It was edited using Audacity (see <a href="resources.php">Resources</a>) and Youtube.com's <a href="https://www.youtube.com/audiolibrary/music" target="_blank">royalty free music collection.</a></p>

            <h4>Group Project Video Presentation</h4>
            <div class="media">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GWvbBbyYN4I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p>This video titled Organizational Analysis of Shelby County Public Library was a group project that provides and organizational analysis of the Shelby County Public Library including an environmental scan, SWOT analysis, vision statement, and strategic goals. My own tasks included the working on the environmental scan and SWOT analysis, helping to create the slides, writing the script, voicing over the presentation with Audacity, and helping to edit the video.</p>

            <h4>Blog</h4>
            <p><a href="https://ischoolblogs.sjsu.edu/info/britliuk/ischool-blog/" target="_blank">Britt's iSchool Odyssey</a> is a blog detailing the information-seeking behavior of PC gamers. It also includes a book review of Clay Shirky's <a href="https://www.goodreads.com/book/show/7614793-cognitive-surplus" target="_blank">Cognitive Surplus</a>, as well as some insights into streaming behavior, the ethics surrounding video game modifications, and PC gamer and developer ideas on fan made content.</p>

        <h3> Programming Projects</h3>

            <p>The project <a href="https://github.com/BriticalStrike/serialKillerBirthdays" target="_blank">serialKillerBirthdays</a> was written using Python. I was inspired by a social media post claiming serial killers belonged to only certain astrological signs. I was able to incorporate web scraping, regular expressions, pandas, and matplotlib to scrape data, convert it into a .csv and pandas dataframe, add a new column to the dataframe, perform analysis on the dataframe, and create a bar chart of the astrological signs.</p>

            <p>The <a href="https://github.com/BriticalStrike/stateTaxCalculator" target="_blank">stateTaxCalculator</a> is a Python project that contains both a standalone script and script with GUI using tkinter. It takes a user input on state and price of the item, accounts for various user input errors and handles them, then calculates the price of the item with state tax.</p>
        
            
        
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