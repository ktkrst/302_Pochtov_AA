<?php
	include 'Book.php';
	class BooksList{
		public $books;
		
		
		public function __construct() {
			$this->books = array();
		}
		
		public function add($book){
			array_push($this->books, $book);
		}
		
		public function get($n) {
			return $this->books[$n];
		}
		
		public function count() {
			return count($this->books);
		}
		
		public  function toString(){
			foreach ($this->books as $book){
				$book->toString();
				echo "<br>";
			}
		}
		
		public function save() {
			if(!file_exists('booklist.file')){
				echo "creating a new save file...<br>";
			}
			$file_handle = fopen('booklist.file', 'w');
			fwrite($file_handle, serialize($this->books));
			fclose($file_handle);
		}
		
		public function load() {
			if(file_exists('booklist.file')){
				$file_handle = fopen('booklist.file', 'r');
				$contents = fread($file_handle, filesize('booklist.file'));
				$this->books = unserialize($contents);
				fclose($file_handle);
			}
			else echo "save file doen't exist;<br>";
		}
	}
?>
