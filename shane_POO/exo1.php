<?php

class Book {
	private $title;
	private $author;
	private $date;
	private $editor;

	public function __construct($title, $author, $date, $editor) {
		// il y a autant d'aguments dans construc que d'attributs privés //

		$this ->_title = $title;
		$this ->_author = $author;
		$this ->_date = $date;		// ce sontdes methodes //
		$this ->_editor = $editor;
	}	


	public function gettitle() {	// attribution accesseur "get..." //
		return $this ->_title;
	}
	public function settitle($title) {	// attribution mutatateur "set..." //
		$this ->_title = $title;
	}



	public function getauthor() {
		return $this ->_author;
	}
	public function setauthor($author) {
		$this ->_author = $author;
	}



	public function getdate() {  // dans un accesseur il n'y a JAMAIS d'attribut //
		return $this ->_date;
	}
	public function setdate($date) {
		$this ->_date = $date;
	}


	public function geteditor() {
		return $this ->_editor;
	}
	public function seteditor($editor) {
		$this ->_editor = $editor;
	}

	function __toString(){
		return $this->_title . "\n" .$this->_author. "\n" .$this->_date . "\n" .$this->_editor;
			// SOIT on utilise return SOIT on utilise echo mais pas les 2 .... //
	}


}

?>







