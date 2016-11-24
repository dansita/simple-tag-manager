<?phpdefined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function stm_page()

{    ?>
<div style="max-width: 95%; margin: 16px 0; margin-top: 20px;">
  <h1>Simple Tag Manager</h1>
  <p>Version 1.0 | <a href="https://dansedmak.com"  rel="nofollow" target="_blank">Author's Website</a></p>  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">    <input type="hidden" name="cmd" value="_s-xclick" />    <input type="hidden" name="hosted_button_id" value="7PGYLG7MBNHK8" />    <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate" />    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />  </form>  <small>Copyright &copy; 2016 Daniel Sedmak | <a href="https://github.com/dansita/simple-tag-manager/"  rel="nofollow" target="_blank">Get the source code</a> | <a href="https://raw.githubusercontent.com/dansita/simple-tag-manager/master/LICENSE" rel="nofollow" target="_blank">Read the license</a></small>
  <hr>
</div>
<div style="max-width: 95%; padding: 20px; overflow: auto; margin: 16px 0; border: 1px solid #e5e5e5; -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.04); box-shadow: 0 1px 1px rgba(0,0,0,.04); background: #fff; font-size: 13px; line-height: 2.1em;"><!--
  <div style="color: red; border: solid 1px red; background: rgba(255,0,0,0.10); padding-left: 10px; padding-right: 10px; margin-bottom: 20px;">
  <p><b>Please note:</b> The script of Google Tag Manager can cause an error with some ModSecurity rules.</p>
  </div>-->
  <form method="post">
    <input type="hidden" name="stmx">    <h3>Mode</h3>    <p>Do you want to install the Tag Manager?</p>    <select name="opt1">      <option value="on" <?php if(get_option('stm_option_1') == "on"){ echo "selected"; } ?>>Yes</option>      <option value="off" <?php if(get_option('stm_option_1') == "off"){ echo "selected"; } ?>>No</option>    </select>    <h3>Head</h3>    <p>The script to add within the <code>head</code> tag:</p>
    <textarea name="opt2"><?php echo get_option('stm_option_2'); ?></textarea>
    <h3>Body</h3>
    <p>The script to add within the <code>body</code> tag:</p>
    <textarea name="opt3"><?php echo get_option('stm_option_3'); ?></textarea>
    <br>    <?php submit_button( 'Save preferences' ); ?>
  </form>
</div>
<?php

}

?>