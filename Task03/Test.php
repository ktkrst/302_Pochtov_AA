<?php
	include 'BookList.php';
	function runTest(){
		$BookList = new BooksList();
		$a1= array('nitshe', 'lev tolstoy', 'karl marks', 'mayakovskiy');
		$b1 = new Book($BookList->count()+1, 'yes memes:-)', $a1, 'kapital','2022');
		$b1->toString();
		echo "<br>";
		
		$b1->setTitle('no memes? :-(');
		echo $b1->getTitle();
		echo "<br>";
		$BookList->add($b1);
		
		//$BookList->load(); echo "<br>"; // will tell: file doesn't exist
		$BookList->save();
		$BookList->books[0]->setTitle('yes memes:-)'); // change but don't save
		$BookList->load();
		echo $BookList->books[0]->getTitle(); // no memes
		echo "<br>";
		
		$a2= array('George Orwell');
		$b2 = new Book($BookList->count()+1, '1984', $a2, 'kniga','1949');
		$BookList->add($b2);
		
		echo "<br>";
		$BookList->toString();
	}
?>