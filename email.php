<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form Style 8</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "45px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
<style>
body{

}
.form-style-8{
    font-family: 'Open Sans Condensed', arial, sans;
    width: 500px;
    padding: 30px;
    background: #FFFFFF;
    margin: 50px auto;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
    background: #4D4D4D;
    text-transform: uppercase;
    font-family: 'Open Sans Condensed', sans-serif;
    color: #797979;
    font-size: 18px;
    font-weight: 100;
    padding: 20px;
    margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
    width: 100%;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
    height: 45px;
}
.form-style-8 textarea{
    resize:none;
    overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
    -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    box-shadow: inset 0px 1px 0px 0px #45D6D6;
    background-color: #2CBBBB;
    border: 1px solid #27A0A0;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 14px;
    padding: 8px 18px;
    text-decoration: none;
    text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
    background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
    background-color:#34CACA;
}
</style>
</head>

<body>

<?php
    if (isset($_POST[send])) {
        $senderName = "Zyogen";
        $senderAddress = "istogu@example.com";
        $recipient = "grugova@hotmail.com";
        $subject = "Neue Nachricht";
        $message = "Name: " . $_POST[field1] . "\nEmail: " . $_POST[field2] . "\nKlasse: " . $_POST[field3] . "\nText: " . $_POST[field4];
        # Composing the header
        $header = "From: " . $senderName . "<" . $senderAddress . ">" . "\n";
        $header .= "Content-Type: text/plain; charset=utf-8" . "\n";
        # Sending the mail
        if (mail($recipient, $subject, $message, $header, "-f" . $senderAddress)) {
            echo "Mail gesendet.";
        } else {
            echo "Fehler beim Senden der Mail.";
        }
    }
?>

<div class="form-style-8">
    <h2>Kontakt</h2>
    <form action="email.php" method="post">
        <input type="text" name="field1" placeholder="Name" />
        <input type="email" name="field2" placeholder="Email-Adresse" />
        <input type="text" name="field3" placeholder="Klasse" />
        <textarea placeholder="Nachricht" onkeyup="adjust_textarea(this)" name="field4"></textarea>
        <input type="submit" name="send" value="Senden" />
    </form>
</div>

</body>
</html>