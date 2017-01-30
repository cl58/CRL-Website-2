<?php 

if ($_POST["destination"]=="mail" ) {
    header( 'Location: http://mail.christopherrlynch.com/' );
}
elseif ($_POST["destination"]=="email" ) {
    header( 'Location: http://mail.christopherrlynch.com/' );
}
elseif ($_POST["destination"]=="forms") {
    header( 'Location: http://www.christopherrlynch.com/forms' );
} 
elseif ($_POST["destination"]=="surveys") {
    header( 'Location: http://www.christopherrlynch.com/forms' );
}
elseif ($_POST["destination"]=="congress") {
    header( 'Location: http://www.christopherrlynch.com/congress' );
}
elseif ($_POST["destination"]=="facebook") {
    header( 'Location: https://www.facebook.com/christopher.robert.lynch' );
}
elseif ($_POST["destination"]=="instagram") {
    header( 'Location: https://www.instagram.com/clynch96' );
}
elseif ($_POST["destination"]=="linkedin") {
    header( 'Location: https://www.linkedin.com/in/christopherrlynch' );
}
elseif ($_POST["destination"]=="heliopanel") {
    header( 'Location: http://www.christopherrlynch.com/heliopanel' );
}
elseif ($_POST["destination"]=="tumblr") {
    header( 'Location: http://www.christopherrlynch.com/tumblr' );
}
elseif ($_POST["destination"]=="home") {
    header( 'Location: http://www.christopherrlynch.com/' );
}
elseif ($_POST["destination"]=="zoho") {
    header( 'Location: https://mail.zoho.com/zm/' );
}
elseif ($_POST["destination"]=="cpanel") {
    header( 'Location: http://stevie.heliohost.org:2082' );
}
else {
    echo '
    <form id="invalid" method="POST" action="http://www.christopherrlynch.com/">
<input type="hidden" name="error" value="error" />
</form>

<script>
document.getElementById("invalid").submit();
</script>
    ';
}


?>