<?php
/*
 Plugin Name: WordPress Post Copyright Plugin
 Plugin URI: http://www.wptoutiao.com/
 Description: add copy to post
 Version: 1.0.0
 Author: shenglei
 Author URI: http://www.wptoutiao.com/
 */
function ShowPostCopyright($content) {
	if(is_single() or is_feed()) {
		$content .= '<div id="post-copyright">
			如未注明，均为原创，转载需注明出处 <br/>
			本文链接地址：'.get_permalink().'<br/>
		</div>';
	}
    return $content;
}
add_filter('the_content', 'ShowPostCopyright', 1);
?>