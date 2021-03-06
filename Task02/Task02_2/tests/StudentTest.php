<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Student;

class StudentTest extends TestCase
{

    public function testTextRepresentation()
    {
        $s1 = new Student();
        $s1 -> setName("Artur") -> setLastName("Klots") -> setFaculty("FMIT") -> setCourse(4) -> setGroup(402);
        $this -> assertSame(
            "Id: 1" . "\n" .
            "Lastname: Klots" . "\n" .
            "Name: Artur" . "\n" .
            "Faculty: FMIT" . "\n" .
            "Course: 4" . "\n" .
            "Group: 402",
            $s1 -> __toString()
        );
    }

    public function testGetFuntions()
    {
        $s1 = new Student();
        $s1 -> setName("Artur") -> setLastName("Klots") -> setFaculty("FMIT") -> setCourse(4) -> setGroup(402);
        $this ->  assertSame("Artur", $s1 -> getName());
        $this ->  assertSame("Klots", $s1 -> getLastName());
        $this ->  assertSame("FMIT", $s1 -> getFaculty());
        $this ->  assertSame(4, $s1 -> getCourse());
        $this ->  assertSame(402, $s1 -> getGroup());
    }
}
