<?php
require "layout/head.php";
?>
    <h1>Contact Us</h1>
    <form action="/contact-submit" method="POST">
        <p>Name</p>
        <input type="text" name="fullname">
        <p>Mesage</p>
        <textarea name="body"></textarea>
        <br/>
        <button type="submit">Send</button>
    </form>
<?php
require "layout/foot.php";
?>