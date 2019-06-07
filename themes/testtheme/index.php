<?php

get_header();

?>

<div id="body-container">

<form method="post" action="<?php echo esc_url( admin_url('admin-post.php') );?>">
        <label>Email</label>
        <input type="email" name="email"/> <br/>
        <label>Username</label>
        <input type="text" name="username"/><br/>
        <label>Password</label>
        <input type="password" name="password"/><br/>
        <input type="hidden" value="submit" action="register"/>
        <input type="hidden" name="_nonce" value="<?php echo wp_create_nonce( '_nonce' ); ?>"/>
        <input type="submit"/>
</form>

</div>

<?php

get_footer();

?>