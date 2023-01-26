<html>
    <head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <head>

    <body class="body-design">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            // https://dashboard.emailjs.com/admin/account
            emailjs.init('lEAdkDCNY6I3ItRtV');
        })();
    </script>
    <script type="text/javascript">
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
        window.onload = function() {
            
            
            document.getElementById('contact-form').addEventListener('submit', function(event) {

                window.location.href = "/index.php";
                event.preventDefault();
                // generate a five digit number for the contact_number variable
                this.contact_number.value = Math.random() * 100000 | 0;
                // these IDs from the previous steps
                emailjs.sendForm('service_axgu08k', 'template_bs9kvv3', this)
                    .then(function() {
                        console.log('SUCCESS!');
                    }, function(error) {
                        console.log('FAILED...', error);
                    });
            });
        }
    </script>

        <?php

            @$examiner_ID = urlencode($_GET['examiner_ID']);
            @$first_name = urlencode($_GET['first_name']);
            @$last_name = urlencode($_GET['last_name']);
            @$user_email = urlencode($_GET['user_email']);
            @$age = urlencode($_GET['age']);
            $email = $_GET['user_email'];

            $link = "http://localhost/confirm.php?id=$examiner_ID&first_name=$first_name&last_name=$last_name&user_email=$user_email&age=$age";
        ?>
        <form id="contact-form">
        <?php
            echo '<div><input type="hidden" name="contact_number"></div>
            <div><input type="number" value='.$_GET["examiner_ID"].' name="examiner_ID" id="examiner_ID" readonly></div>
                <div><input type="text" value='.$_GET["first_name"].' name="first_name" id="first_name"readonly></div>
                <div><input type="text" value='.$_GET["last_name"].' name="last_name" id="last_name" readonly></div>
                <div><input type="text" value='.$_GET['user_email'].' name="user_email" id="user_email" readonly></div>
                <div><input type="number" value='.$_GET["age"].' name="age" id="age" readonly></div>
                <div><input type="hidden" value='.$link.' name="link" id="link" readonly></div>
                <div class="g-recaptcha" data-sitekey="6LfuLBgkAAAAAKh1b6H59_X_tuWsrTgOHKVVRec_"></div>
                <div><input type="submit" name="submit" id="submit" placeholder="Submit" class="Submit">';
        ?>
        </from>

    </body>
</html>