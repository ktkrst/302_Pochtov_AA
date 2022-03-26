<?php

	class Book{
		public $id;
		public $title;
		public $authors;
		public $publisher;
		public $year;

		public function __construct($id, $title, $authors, $publisher, $year) {
			$this->id = $id;
			$this->title = $title; 
			$this->authors = $authors;
			$this->publisher = $publisher;
			$this->year = $year;
		}
		
		public function setTitle($title){
			$this->title  = $title; 
		}
		public function setAuthors($authors){
			$this->authors  = $authors; 
		}
		public function setPublisher($publisher){
			$this->publisher  = $publisher; 
		}
		public function setYear($year){
			$this->year  = $year; 
		}
		
		public function getId(){
			return $this->id; 
		}
		public function getTitle(){
			return $this->title; 
		}
		public function getAuthors(){
			return $this->authors; 
		}
		public function getPublisher(){
			return $this->publisher; 
		}
		public function getYear(){
			return $this->year; 
		}
		
		public function toString(){
			echo "ID: $this->id".PHP_EOL;
			echo "Название: $this->title".PHP_EOL;
			for ($i=0; $i < count($this->authors); $i++ ){
				echo "Автор";
				echo $i+1;
				echo ": ".$this->authors[$i];
				echo PHP_EOL;
			}
			echo "Издательство: $this->publisher".PHP_EOL;
			echo "Год: $this->year".PHP_EOL;
		}
	}
?>
