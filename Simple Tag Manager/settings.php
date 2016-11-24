<?php

function stm_page()

{
<div style="max-width: 95%; margin: 16px 0; margin-top: 20px;">
  <h1>Simple Tag Manager</h1>
  <p>Version 1.0 | <a href="https://dansedmak.com"  rel="nofollow" target="_blank">Author's Website</a></p>
  <hr>
</div>

  <div style="color: red; border: solid 1px red; background: rgba(255,0,0,0.10); padding-left: 10px; padding-right: 10px; margin-bottom: 20px;">
  <p><b>Please note:</b> The script of Google Tag Manager can cause an error with some ModSecurity rules.</p>
  </div>
  <form method="post">
    <input type="hidden" name="stmx">
    <textarea name="opt2"><?php echo get_option('stm_option_2'); ?></textarea>
    <h3>Body</h3>
    <p>The script to add within the <code>body</code> tag:</p>
    <textarea name="opt3"><?php echo get_option('stm_option_3'); ?></textarea>
    <br>
  </form>
</div>
<?php

}

?>