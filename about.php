<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About | B. Liukkonen Portfolio</title>
    <meta name="description" content="About Brittanee Liukkonen">

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
        <h2>About Me</h2>    
        
        <p>Hi, my name is Brittanee Liukkonen and I am curently a student at San Jose State University pursuing a Master's degree in Library and Information Science with emphasis on data analysis and data-driven decision making. </p>

        <p>I am working toward a career in research or data librarianship and data analysis. Many of my projects are centered around this theme, but I enjoy all aspects of librarianship and data! In addition to the projects on the <a href="projects.php">Projects</a> page, I have taken many courses in this area including: Information System Retreival and Design, Web, Text, and Data Mining, Big Data Analytics, and will be taking Gamification of Information. This is not an all-inclusive list of courses, so feel free to contact me through any means listed in the sidebar if you have any questions.</p>

        <table class = "school">
            <caption>Schooling</caption>
            <thead>
                <tr>
                    <th>School and Website</th>
                    <th>Graduation Date</th>
                    <th>Degree</th>
                    <th>Concentration</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="http://www.sjsu.edu/" target="_blank">San Jose State University</a></td>
                <td>May 2020</td>
                <td>Master's Degree</td>
                <td>Library and Information Science and Advanced Certificate in Data Analysis and Data Driven Decision-Making</td>
            </tr>
            <tr>
                <td><a href="https://www.fresnocitycollege.edu/" target="_blank">Fresno City College</a></td>
                <td>December 2015</td>
                <td>Professional Certificate</td>
                <td>Paralegal Studies</td>
            </tr>
            <tr>
                <td><a href="http://www.csustan.edu/" target="_blank">California State University, Stanislaus</a></td>
                <td>May 2012</td>
                <td>Bachelor of Arts</td>
                <td>Philosophy</td>
            </tr>
        </table>

        <p>In addition to my current program, I have a background in paralegal studies and worked as a paralegal for a Public Defender's office for over two years, which gave me wonderful skills in public service, organization, writing, researching, and working in a high-stress environment.</p>

        <p>While going to school, I enjoy time spent learning to program, painting, reading, and spending time with my rescue pets, Buddy and Mister.</p>
        <img class="dogpic" src="images/buddypic.jpg" alt="A picture of Brittanee and her dog, Buddy, a Chihuahua mic, on the beach" width="250" height="341">

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