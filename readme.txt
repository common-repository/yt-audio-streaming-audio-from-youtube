=== YT-Audio: Audio Hosting From YouTube in WordPress ===
Contributors: erikrasmussen
Donate link: http://erikras.com/donate/
Tags: youtube, audio, media, music
Requires at least: 2.0.2
Tested up to: 3.3.2
Stable tag: 1.8

YT-Audio is a way to embed YouTube videos into your Wordpress blog so that the video portion of the player is hidden, making it an audio-only player.

== Description ==

YT-Audio adds an flash audio player into your blog post that streams audio from YouTube.

It works by trimming the standard YouTube video player to only show the controls.

== Installation ==

1. Unzip the plugin into the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `ytaudio(2_HXUhShhmY)` into your blog post, where `2_HXUhShhmY` is the code for the video you want to embed on YouTube.

== Frequently Asked Questions ==

= The player shows up, but the song won't play. What's up? =

This will happen if embedding has been disabled for the video you are using. Because the video portion of the player is hidden, so is the message telling you that embedding is disabled. Try to embed the entire video with the full embed code from YouTube before reporting a problem.

= Where is the volume control? =

When the volume control opens in the YouTube player, it opens over the video portion of the player, which is hidden inside a frame by this plugin, so even if YT-Audio displayed the volume control button, you could not change the volume with it because the popup slider would be hidden. This is unfortunate, but there's nothing that can be done about it.

= I'm getting something in the frame that looks like my blog header. What's wrong? =

This will happen if your plugins directory is not in the default location. You will need to edit the two lines in `ytaudio.php` that contain `wp-content/plugins/yt-audio-streaming-audio-from-youtube` to reflect the actual location of the ytaudio plugin with respect to your blog root.

== Screenshots ==

1. This is how the player looks on the page.
1. Plugins should have logos, don't you think?

== Change Log ==

*       1.8 - 2011-04-05 - Changed my blog url.
*       1.7 - 2011-02-22 - Changed embed code to work with YouTube's new player
*       1.6 - 2009-04-30 - Oops. Remembered why volume control should be hidden. Sorry!
*       1.5 - 2009-04-30 - Expanded iframe to include volume control.
*       1.4 - 2009-02-23 - Fixed directory name in plugins dir.
*       1.2 - 2009-12-04 - Fixed to accept YouTube codes with underscores and dashes.
*       1.1 - 2007-09-25 - Original version.
