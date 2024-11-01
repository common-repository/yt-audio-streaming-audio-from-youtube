<?php
/*
Plugin Name: YT-Audio
Plugin URI: http://erikras.com/2007/09/25/yt-audio-audio-hosting-from-youtube-in-wordpress/
Description: YT-Audio is a simple way to embed YouTub videos into your Wordpress blog so that the video portion of the player is hidden, thus converting it to an audio-only player.  Simply insert "ytaudio(XYZ)" (where XYZ is the code for your video on <a href="http://www.youtube.com/">YouTube</a>) into any post or page and the audio player will be embedded in your page.
Author: Erik Rasmussen
Author URI: http://erikras.com/
Version: 1.8
*/

load_plugin_textdomain('yta',$path = 'wp-content/plugins/yt-audio-streaming-audio-from-youtube');

/*Wrapper function which inserts the player.*/
function yta_callback( $content )
{
		if(preg_match('/ytaudio\(\)/', $content))
    {
      return preg_replace('/ytaudio\(\)/', 'NO VIDEO SPECIFIED', $content);
    }
		else if(preg_match('/ytaudio\([a-zA-Z0-9\-_]+\)/', $content))
    {
      $vid = '<iframe width="361" height="25" scrolling="no" style="border:none;" src="' . get_settings('siteurl') . '/wp-content/plugins/yt-audio-streaming-audio-from-youtube/frame.php?v=${1}">\n</iframe>';
      $vid = $vid . '<!-- yt-audio: http://erikras.com/2007/09/25/yt-audio-audio-hosting-from-youtube-in-wordpress/ -->';
      return preg_replace('/ytaudio\(([a-zA-Z0-9\-_]+)\)/', $vid, $content);
		}
    else {
      return $content;
    }
}

function ytaudio($video)
{
  echo '<iframe width="361" height="25" scrolling="no" style="border:none;" src="' . get_settings('siteurl') . '/wp-content/plugins/yt-audio-streaming-audio-from-youtube/frame.php?v='.$video.'">\n</iframe>';
  echo '<!-- yt-audio: http://erikras.com/2007/09/25/yt-audio-audio-hosting-from-youtube-in-wordpress/ -->';
}

/* Add callback */
add_filter('the_content', 'yta_callback', 7);
?>
