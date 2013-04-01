<pre>
<?php
function send($email) {
    $sequence = date('mdHis');
    mail($email, "TM $sequence", "YMTM to $email");
}

if (is_array($_GET) && array_key_exists('send', $_GET)) {
    $email = $_GET['send'];
    echo htmlspecialchars("Sending mail to <$email>");
    send($email);
} else {
    echo 'No send requested';
}
?>
</pre>

<form>
    <fieldset>
        <input name="send" type="text" />
        <button type="submit">Send</button>
    </fieldset>
</form>
