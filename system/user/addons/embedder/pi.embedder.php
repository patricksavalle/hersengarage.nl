<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Embedder {

	var $return_data;


	function __construct()
	{
		$str = ee()->TMPL->tagdata;

		// transform youtube-link into embed
		$str = preg_replace(
			"/\[\[https:\/\/(?:(?:www|m)\.)?(?:youtube\.com|youtu.be)\/(?:[\w\-]+\?v=|embed\/|v\/?)?([\w\-]+)(?:\S+)?\]\]/",
			"<iframe class='eb_video eb_youtube' src='//www.youtube.com/embed/$1' allowfullscreen></iframe>",
			$str);

		// transform bitchute-link into embed
		$str = preg_replace(
			"/\[\[https?:\/\/(?:www)?\.?bitchute\.com\/video\/([\w-]{1,64})\/\]\]/",
			"<iframe class='eb_video eb_bitchute' src='//www.bitchute.com/embed/$1' allowfullscreen></iframe>",
			$str);

		// else assume image
		$str = preg_replace(
			"/\[\[(https?:\/\/[^ ]+) ?(.*)\]\]/",
			"<figure><img src='$1'></figure><figcaption>$2</figcaption>",
			$str);

		$this->return_data = $str;
	}
}
// END CLASS
