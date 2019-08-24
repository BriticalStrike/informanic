<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact | B. Liukkonen Portfolio</title>
    <meta name="description" content="Contact Brittanee Liukkonen for more information.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Start of form validation script -->
    <script>
        function printDate() {
            var d = new Date();
            var day = d.getDate();
            var month = d.getMonth() + 1;
            var year = d.getFullYear();
                var hours = d.getHours();
                var minutes = d.getMinutes();
                
                if (minutes < 10) {
                        minutes = "0" + minutes;
                }
        
                var suffix = "AM";
                if (hours >= 12) {
                        suffix = "PM";
                        hours = hours - 12;
                }
                
                if (hours == 0) {
                        hours = 12;
                }
           document.write("It is " + hours + ":" + minutes + " " + suffix + " on " + month + "/" + day + "/" + year);
        }
            
        function validate()
        {
            var first_name = document.forms["contactForm"]["first-name"];
            var last_name = document.forms["contactForm"]["last-name"];
            var age = document.forms["contactForm"]["email"];
            var company = document.forms["contactForm"]["company"];
            var reason = document.forms["contactForm"]["reason"];

            if (first_name.value == "")
            {
                window.alert("Please enter your first name.");
                first_name.focus()
                return false;
            }

            if (last_name.value == "")
            {
                window.alert("Please enter your last name.");
                last_name.focus()
                return false;
            }

            if (email.value == "")
            {
                window.alert("Please enter you email.");
                age.focus()
                return false;
            }

            if (company.value == "")
            {
                window.alert("Please enter your associated company or profession.");
                company.focus()
                return false;
            }

            chosen = "";
            len = reason.length;
            for (i=0; i <len; i++) 
            {
                if (reason[i].checked)
                {
                    chosen = reason[i].value
                }
            }
            if (chosen == "")
            {
                window.alert("Please choose a reason for contacting me.");
                return false;
            }
            return true;
        }
    </script>
    <!-- End of form validation script -->
</head>

<body>

<!-- Start of main wrapper -->
<div class="wrapper">
    <header class ="banner">
        <?php include('includes/banner-nav.php');?>
    </header>
    <main class="main">
        <h2>Contact Me</h2>
        <!-- Start of form -->
        <?php print $formMessage;?>
        <form name="contactForm" method="post" action="contact.php" onsubmit="return validate()">
            <fieldset>
                <legend>Basic Information</legend>

            <div>
                <label for="first-name">First Name:</label>
                <input id="first-name" name="first-name" type="text">
            </div>

            <div>
                <label for="last-name">Last Name:</label>
                <input id="last-name" name="last-name" type="text">
            </div>

            <div>
                <label for="email">Email:</label>
                <input id="email" name="email" type="text">
            </div>
            
            <div>
                <label for="company">Company:</label>
                <input id="company" name="company" type="text">
            </div>

            </fieldset>
            <!-- Start of radio -->
            <fieldset>
                <legend>Reason for Contact</legend>

                <input type="radio" id="projects" name="reason" value="projects">
                <label for="projects">Project Information</label>

                <input type="radio" id="business" name="reason" value="business">
                <label for="business">Business Inquiry</label>

                <input type="radio" id="school" name="reason" value="school">
                <label for="school">School Information</label>

                <input type="radio" id="other" name="reason" value="other">
                <label for="other">Other</label>

            </fieldset>
            <!-- End of radio -->
            <fieldset>
                <legend>Additional Comments</legend>
                <textarea name="comment"></textarea>
            </fieldset>
            <input type="submit" value="Submit">
        </form>
        <!-- End of form -->
        <div class="date">
            <script>printDate();</script>
        </div>
    </main>
    <aside class="sidebar">
        <?php include('includes/sidebar.php');?>
    </aside>
    <footer class="footer">
        <?php include('includes/copyright.php');?>
    </footer>
</div> <!--end of wrapper-->

</body>
</html>