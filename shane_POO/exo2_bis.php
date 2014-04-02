<?php

require ('exo1.php');

class booktest {
	private $_book;
	
	public function __construct($_book) {
		$this ->_name=$_book;
	}

	public function Instance_test() {
		$this ->_book = new book ('titre1', 'auteur1', 'date1', 'editeur1');
	}



	public function getTitleTest() {
		return ($this ->_book -> gettitle() == ('titre1'));
	}
	public function setTitleTest() {
		$this ->_book -> settitle('titre2');
		return ($this ->_book -> gettitle == ('titre2'));
	}



	public function getAuthorTest() {
		return ($this ->_book -> getauthor() == ('auteur1'));
	}
	public function setAuthorTest() {
		$this ->_book -> setauthor('auteur2');
		return ($this ->_book -> getauthor == ('auteur2'));
	}


	public function getDateTest() {
		return ($this ->_book -> getdate() == ('date1'));
	}
	public function setDateTest() {
		$this ->_book -> setdate('date2');
		return ($this ->_book -> getdate == ('date2'));
	}


	public function getEditorTest() {
		return ($this ->_book -> geteditor() == ('editeur1'));
	}
	public function setEditorTest() {
		$this ->_book -> seteditor('editeur2');
		return ($this ->_book -> geteditor == ('editeur2'));
	}





}


$booktest = new booktest("moi");
$booktest -> Instance_test();


	if ($booktest -> getTitleTest()) {
		printf ("test getTitleTest OK!! \n");
	}
	else {
		printf ("test getTitleTest failed!! \n");
	}


	if ($booktest -> getAuthorTest()) {
		printf ("test getAuthorTest OK!! \n");
	}
	else {
		printf ("test getAuthorTest failed!! \n");
	}



	if ($booktest -> getDateTest()) {
		printf ("test getDateTest OK!! \n");
	}
	else {
		printf ("test getDateTest failed!! \n");
	}


if ($booktest -> getEditorTest()) {
		printf ("test getEditorTest OK!! \n");
	}
	else {
		printf ("test geteditorTest failed!! \n");
	}

$StringTest = new book ("\ntest1", "test1", "test1", "test1");
echo $StringTest;

?>












?>
