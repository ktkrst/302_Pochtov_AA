<?php

namespace pochtovaa\Task04;

function runTest()
{
    $stack1 = new Stack('1', '2', '3', '4', '5');
    echo "стек1: ", $stack1->__toString(), PHP_EOL, 
	"Результат метода top(): ", $stack1->top(), PHP_EOL, "стек1 после метода top(): ", $stack1->__toString(), PHP_EOL, 
	"Результат метода pop(): ", $stack1->pop(), PHP_EOL, "стек1 после метода pop(): ", $stack1->__toString(), PHP_EOL;
    $stack2 = $stack1->copy();
    $stack2->push(6, 7, 8);
    echo "Сделаем копию стек1 методом copy() - стек2; используем метод push() на стек2; сравним стек1 и стек2:", PHP_EOL,
	$stack1->__toString(), PHP_EOL, $stack2->__toString(), PHP_EOL;
	echo "Сравнение строк:", PHP_EOL;
    echo "(ab#c, ade##c) - ", compareStrings("ab#c", "ade##c"), PHP_EOL, 
	"(a#d, c) - ", compareStrings("a#d", "c"), PHP_EOL, 
	"(abc###, a#b#) - ", compareStrings("abc###", "a#b#"), PHP_EOL;
}
