<?php


class ThickBox extends Object {

	static function include_code() {
		Requirements::javascript('thickbox/javascript/jquery.thickbox.js');
		Requirements::css('thickbox/css/thickbox.css');
	}

	static function block() {
		Requirements::block('thickbox/javascript/jquery.thickbox.js');
		Requirements::block('thickbox/css/thickbox.css');
	}

	static function setAlternativeLoadingImage($location = "thickbox/images/loading.gif") {
		Requirements::customScript('var tb_pathToImage = "'.$location.'";');
	}

}