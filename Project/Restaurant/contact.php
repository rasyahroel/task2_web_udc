<?php
define("TITLE", "Contact || Roy's Resto and Café");
include('includes/header.php')
?>

<div class="contact">
    <hr>
    <h1>Get in touch with us!</h1>

    <?php
    // Check for header injections
    function has_header_injection($str)
    {
        return preg_match("/[\r\n]/", $str);
    }

    if (isset($_POST['contact_submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = $_POST['message'];

        // Check to see if $name or $email have header injections
        if (has_header_injection($name) || has_header_injection($email)) {
            die();  // If true, kill the script
        }

        if (!$name || !$email || !$msg) {
            echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
            exit;
        }
        // Add to recipient email to a variable
        $to = "your@email.com";
        // Create a subject
        $subject = "$name sent you a message via your contact form";
        // Construct the message
        $message = "Name: $name\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message:\r\n$msg";

        // If the subscribe checkbox was checked
        if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
            // Add a new line to the message
            $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
        }

        $message = wordwrap($message, 72);
        // Set the mail headers into a variable
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email>\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        // Send the email
        // mail($to, $subject, $message, $headers);
        if (!mail($to, $subject, $message, $headers)) {
            $error = error_get_last();
            echo "Mail sending failed: " . $error['message'];
        }

    ?>

        <!-- Show success message after email has sent -->
        <h5>Thanks for contacting Roy's!</h5>
        <p>Please allow 24 hours for a response.</p>
        <p><a href="/final" class="button block">&laquo; Go to Homepage</a></p>

    <?php } else {  ?>

        <div class="center">
            <form method="post" class="form-contact">
                <label for="name">Your name</label>
                <input type="text" id="name" name="name">

                <label for="email">Your email</label>
                <input type="email" id="email" name="email">

                <label for="message">Your message here</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>

                <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
                <label for="subscribe">Subscribe to Newsletter</label>

                <br>
                <input type="submit" name="contact_submit" value="Send Message !">
            </form>
        </div>

    <?php } ?>

    <hr>
</div>

<?php
include('includes/footer.php')
?>