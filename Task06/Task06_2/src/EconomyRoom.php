<?php

namespace pochtovaa\Task06_2;

class EconomyRoom extends Room
{
    public function __construct()
    {
        parent::__construct(1000, "Эконом");
    }
}