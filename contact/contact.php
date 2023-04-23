<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8"/>
        <link href="../stylesheet.css" type="text/css" rel="stylesheet" media="screen">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https%3A%2F%2Fcse.google.com%2Fcse/tools/onthefly?form=searchbox_demo&lang="></script>
        <title>Arkadiusz Kolodziej Portfolio</title>
    </head>
    <body>
        <header>
            <div class="center">
                <a href="../index.php"><img class="" src="../images/monogram.png" alt="View the Arkadiusz's Monogram"/></a>
                <nav>
                    <ul>
                        <li><a href="../about.php">About</a></li>
                        <li><a href="../resume.php">Resume</a></li>
                        <li><a class="last_nav" href="contact.php">Contact</a></li>
                    </ul>
                </nav>

            </div>
        </header>
        <figure>     
            <img class="no_shadow" src="../images/bar3.gif" title="Bar" alt="See Bar"/>
        </figure>
        <div class="center">
            <main>
                <h1>Drop your question</h1>
                <p class="thank">
                    <?php
                    echo $contactmessage;
                    ?>
                </p>
                <!-- This is place for the contact form-->
                <form action="/contact/index.php" method="POST">
                    <p>Name</p> <input type="text" name="name" class="input">
                    <p>Email</p> <input type="text" name="email" class="input">
                    <p>Message</p><textarea name="message" rows="6" cols="50" placeholder="Type your message..."></textarea><br />

                    <!-- This displays the captcha image -->
                    <label>&nbsp;</label><img id="captcha" src="/contact/captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> 
                    <p id="captcha_note">(Type these characters into the text box below)</p>
                    <!-- This allows the user to type in what they see -->
                    <label id="after_captcha" for="cap_code">Security Code:  </label><input id="cap_code" name="cap_code" type="text" size="6" class="input" required><br>
                    <input type="submit" value="Send" class="button_form"><input type="reset" value="Clear" class="button_form">
                </form>
                <p>I will get back to you as soon as possible.</p>
            </main>
        </div>

        <footer>
            <div class="center">
                <a href="../index.php"><img src="../images/Monogram_Avenir_Revised.png" alt="View the Arkadiusz's Monogram"/></a>
                <ul>
                    <li><a href="../about.php">About</a></li>
                    <li><a href="../resume.php">Resume</a></li>
                    <li><a class="last_nav" href="contact.php">Contact</a></li>
                </ul>
                <p>&copy Copyright by Arkadiusz Kolodziej 2016</p>  
            </div>
        </footer>
    </body>
</html>


















