<?php

namespace Rodushkinve\Tests;
use \PHPUnit\Framework\TestCase;
use Rodushkinve\Task06_2\EconomyRoom;
use Rodushkinve\Task06_2\StandardRoom;
use Rodushkinve\Task06_2\SuiteRoom;
use Rodushkinve\Task06_2\InternetDecorator;
use Rodushkinve\Task06_2\BreakfastDecorator;
use Rodushkinve\Task06_2\FoodDeliveryDecorator;
use Rodushkinve\Task06_2\SofaDecorator;

final class DecoratorTest extends TestCase
{
    public function testEconomyRoomGetPrice(): void
    {
        $room = new EconomyRoom();
        $room = new InternetDecorator($room);
        $room = new BreakfastDecorator($room);
        $roomPrice = $room->getPrice();
        $this->assertSame(1600, $roomPrice);
    }

    public function testStandardRoomGetPrice(): void
    {
        $room = new StandardRoom();
        $room = new InternetDecorator($room);
        $room = new BreakfastDecorator($room);
        $room = new SofaDecorator($room);
        $roomPrice = $room->getPrice();
        $this->assertSame(3100, $roomPrice);
    }

    public function testSuiteRoomGetPrice(): void
    {
        $room = new SuiteRoom();
        $room = new FoodDeliveryDecorator($room);
        $roomPrice = $room->getPrice();
        $this->assertSame(3300, $roomPrice);
    }

    public function testEconomyRoomGetDescription(): void
    {
        $room = new EconomyRoom();
        $room = new InternetDecorator($room);
        $room = new BreakfastDecorator($room);
        $roomDescription = $room->getDescription();
        $this->assertSame("Номер: Эконом, выделенный Интернет, завтрак \"шведский стол\"", $roomDescription);
    }

    public function testStandardRoomGetDescription(): void
    {
        $room = new StandardRoom();
        $room = new InternetDecorator($room);
        $room = new BreakfastDecorator($room);
        $room = new SofaDecorator($room);
        $roomDescription = $room->getDescription();
        $this->assertSame(
            "Номер: Стандарт, выделенный Интернет, завтрак \"шведский стол\", дополнительный диван",
            $roomDescription
        );
    }

    public function testSuiteRoomGetDescription(): void
    {
        $room = new SuiteRoom();
        $room = new FoodDeliveryDecorator($room);
        $roomDescription = $room->getDescription();
        $this->assertSame("Номер: Люкс, доставка еды в номер", $roomDescription);
    }
}
