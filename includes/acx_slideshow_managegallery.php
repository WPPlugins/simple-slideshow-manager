<?php
acx_slideshow_hook_function('acx_slideshow_hook_option_above_ifpost_manage');
if(ISSET($_POST['acx_slideshow_hidden']))
{
	$acx_slideshow_hidden = $_POST['acx_slideshow_hidden'];
} 
else
{
	$acx_slideshow_hidden = "";
}
if($acx_slideshow_hidden == 'Y') 
{
	acx_slideshow_hook_function('acx_slideshow_hook_option_onpost_manage');
} else
{
	acx_slideshow_hook_function('acx_slideshow_hook_option_postelse_manage');
}
acx_slideshow_hook_function('acx_slideshow_hook_option_after_else_manage');
acx_slideshow_hook_function('acx_slideshow_hook_option_form_head_manage');
acx_slideshow_hook_function('acx_slideshow_hook_option_fields_manage');
acx_slideshow_hook_function('acx_slideshow_hook_option_form_footer_manage');
acx_slideshow_hook_function('acx_slideshow_hook_option_sidebar_manage');


?>