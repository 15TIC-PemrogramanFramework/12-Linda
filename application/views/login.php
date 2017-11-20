<!doctype html>
<html lang="en-US">
<head>

    <meta charset="utf-8">

    <title>Login</title>
    <style>
    @charset "utf-8";
    /* CSS Document */

    /* ---------- FONTAWESOME ---------- */
    /* ---------- http://fortawesome.github.com/Font-Awesome/ ---------- */
    /* ---------- http://weloveiconfonts.com/ ---------- */

    @import url(http://weloveiconfonts.com/api/?family=fontawesome);

    /* ---------- ERIC MEYER'S RESET CSS ---------- */
    /* ---------- http://meyerweb.com/eric/tools/css/reset/ ---------- */

    @import url(http://meyerweb.com/eric/tools/css/reset/reset.css);

    /* ---------- FONTAWESOME ---------- */

    [class*="fontawesome-"]:before {
      font-family: 'FontAwesome', sans-serif;
  }

  /* ---------- GENERAL ---------- */

  body {
    background-color: white;
    color: #000;
    font-family: "Varela Round", Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.5em;
}

input {
    border: none;
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
    line-height: inherit;
    -webkit-appearance: none;
}

/* ---------- LOGIN ---------- */

#login {
    margin: 50px auto;
    width: 400px;
}

#login h2 {
    background-color: #f95252;
    -webkit-border-radius: 20px 20px 0 0;
    -moz-border-radius: 20px 20px 0 0;
    border-radius: 20px 20px 0 0;
    color: #fff;
    font-size: 28px;
    padding: 20px 26px;
}

#login h2 span[class*="fontawesome-"] {
    margin-right: 14px;
}

#login fieldset {
    background-color: floralwhite;
    -webkit-border-radius: 0 0 20px 20px;
    -moz-border-radius: 0 0 20px 20px;
    border-radius: 0 0 20px 20px;
    padding: 20px 26px;
}

#login fieldset p {
    color: #777;
    margin-bottom: 14px;
}

#login fieldset p:last-child {
    margin-bottom: 0;
}

#login fieldset input {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

#login fieldset input[type="text"], #login fieldset input[type="password"] {
    background-color: #eee;
    color: #777;
    padding: 4px 10px;
    width: 328px;
}

#login fieldset input[type="submit"] {
    background-color: #33cc77;
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 4px 0;
    width: 100px;
}

#login fieldset input[type="submit"]:hover {
    background-color: #28ad63;
}
</style>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

    <div id="login">

        <h2 style="margin-top: 180px"><span class="fontawesome-lock"></span>Log In</h2>

        <form action="<?php echo site_url('Login/ceklogin'); ?>" method="POST">

            <fieldset>
                
                <p><label>Username</label></p>
                <p><input type="text" name="username" placeholder="Masukkan username"></p>

                <p><label>Password</label></p>
                <p><input type="password" name="password" placeholder="Masukkan password"></p>

                <p><input type="submit" value="Log In"></p>

            </fieldset>

        </form>

    </div> <!-- end login -->

</body> 
</html>