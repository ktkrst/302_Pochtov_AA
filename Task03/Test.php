<?php
	include 'BookList.php';
	function runTest(){
		$BookList = new BooksList();
		$a1= array('nitshe', 'lev tolstoy', 'karl marks', 'mayakovskiy');
		$b1 = new Book($BookList->count()+1, 'yes', $a1, 'kapital','2022');
		$b1->toString();
		echo PHP_EOL;
		
		$b1->setTitle('no');
		echo $b1->getTitle();
		echo PHP_EOL;
		$BookList->add($b1);
		
		//$BookList->load(); echo PHP_EOL; // will tell: file doesn't exist
		$BookList->save();
		$BookList->books[0]->setTitle('yes'); // change but don't save
		$BookList->load();
		echo $BookList->books[0]->getTitle(); // no memes
		echo PHP_EOL;
		
		$a2= array('George Orwell');
		$b2 = new Book($BookList->count()+1, '1984', $a2, 'kniga','1949');
		$BookList->add($b2);
		
		echo PHP_EOL;
		$BookList->toString();
	}
?>
