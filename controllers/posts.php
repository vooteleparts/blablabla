<?php

class posts extends Controller{

	function index(){
		$this->posts = get_all("SELECT * FROM post");
	}
	function view(){
		$post_id = $this->params[0];
		$this->post = get_one("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
	}
}