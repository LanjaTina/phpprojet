<h1>Contact us</h1>

<p>Contact us using the form below.</p>

<form method="post" id="form-email">
    Your email<br />
    <input type="email" name="email" required="required" value="<?php if (isset($_POST['email'])) echo(htmlspecialchars($_POST['email'])); ?>" /><br />
    Antispam - enter the current year<br />
    <input type="text" name="abc" required="required" /><br />
    <textarea name="message"><?php if (isset($_POST['message'])) echo(htmlspecialchars($_POST['message'])); ?></textarea><br />
    <input type="submit" value="Send" />
</form>
<style>
    input[type="submit"] {
    background: #6FA4F8;
    color: white;
    padding: 5px 10px;
    border-radius: 10px;
    border: 0px;
}

input[type="submit"]:hover {
    background: #2976f8;
    color: #EEEEEE;
    cursor: pointer;
}

input[type="text"], input[type="email"], input[type="password"] {
    width: 250px;
    border-radius: 5px;
    border: 1px solid #aaaaaa;
    padding: 0.3em;
}

input[type="submit"] {
    padding: 10px 25px;
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    font-weight: bold;
}

textarea {
    border-radius: 5px;
    border: 1px solid #aaaaaa;
    width: 483px;
    height: 90px;
}
</style>