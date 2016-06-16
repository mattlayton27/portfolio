<?php session_start(); ?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Contact Page | rainieradventures.com</title><?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/modules/head.php'; ?></head><body><div><header>    <div>        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/modules/header.php'; ?>    </div></header><nav>    <div>        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/modules/navigation.php'; ?>    </div></nav><main>    <div>        <h2>Contact Me</h2>            <?php            if (!empty($errors)) {            echo '<ul class="notify">';            foreach ($errors as $error) {            echo "<li>$error</li>";            }            echo '</ul>';            unset($errors);            }            ?>            <p>Please contact me using the provided form. All fields are required.</p>            <form method="post" action="." id="contactform">                <label for="name">Name:</label><br>                <input type="text" name="name" id="name" size="40" value="<?php echo $name; ?>" required><br>                <label for="email">Email</label><br>                <input type="email" name="email" id="email" size="50" value="<?php echo $email; ?>" required><br>                <label for="subject">Subject</label><br>                <input type="text" name="subject" id="subject" size="50" value="<?php echo $subject; ?>" required><br>                <label for="message">Message</label><br>                <textarea name="message" id="message" cols="50" rows="10" required><?php echo $message; ?></textarea><br>                <label>&nbsp;</label>                <img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image">(Type these characters into the text box below)<br>                <label for="cap_code">Security Code:</label><br>                <input id="cap_code" name="cap_code" type="text" size="6" required><br>                <label for='action'>&nbsp;</label>                <input type='submit' name="action" id='action' value="Send"><br>            </form>    </div></main><footer>    <div>        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/modules/footer.php'; ?><br>        <?php echo 'Last updated: ' . date('F d, Y',  getlastmod()) ?>    </div></footer></div></body></html>