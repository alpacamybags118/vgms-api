<?php
/**
 * Created by PhpStorm.
 * User: jsaky
 * Date: 2/11/2018
 * Time: 5:14 PM
 */

namespace App\Data;


interface IDataAccess
{
    public function AddObject();
    public function GetObject();
    public function UpdateObject();
}