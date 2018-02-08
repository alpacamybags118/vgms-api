<?php

namespace App\Model;


class Game
{
    private $Id;
    private $Name;
    private $System;
    private $Condition;

    public function __construct()
    {
        $this->Id = uniqid();
    }

    public function GetId()
    {
        return $this->Id;
    }
    public function GetName()
    {
        return $this->Name;
    }
    public function GetSystem()
    {
        return $this->System;
    }
    public function GetCondition()
    {
        return $this->Condition;
    }
    public function SetName(string $name)
    {
        $this->Name = $name;
    }
    public function SetSystem(string $system)
    {
        $this->System = $system;
    }
    public function SetCondition(string $condition)
    {
        $this->Condition = $condition;
    }

}