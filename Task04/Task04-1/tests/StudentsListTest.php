c<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\StudentsList;
use App\Student;

class StudentsListTest extends TestCase
{
    public function testAddAndCount()
    {
        $student = new Student();
        $studentsList = new StudentsList();
        $studentsList -> add($student);
        $this -> assertSame(1, $studentsList -> count());
    }

    public function testGet()
    {
        $student = new Student();
        $studentsList = new StudentsList();
        $student -> setName("Artur") -> setLastName("Klots") -> setFaculty("FMiIT") -> setCourse(4) -> setGroup(402);
        $studentsList -> add($student);
        $this -> assertInstanceOf(Student::class, $studentsList -> get(1));
    }

    public function testStore()
    {
        $student = new Student();
        $studentsList = new StudentsList();
        $student -> setName("Artur") -> setLastName("Klots") -> setFaculty("FMiIT")-> setCourse(4) -> setGroup(402);
        $studentsList -> add($student);
        $this -> assertSame(null, $studentsList -> store("output"));
    }

    public function testLoad()
    {
        $studentsList = new StudentsList();
        $studentsList -> load("output");
        $this -> assertSame(1, $studentsList -> count());
        $this -> assertInstanceOf(Student::class, $studentsList -> get(1));
        $this -> assertSame("File fileName does not exist!", $studentsList -> load("fileName"));
    }

    public function testCurrentAndKey()
    {
        $student1 = new Student();
        $student2 = new Student();
        $student3 = new Student();
        $studentsList = new StudentsList();
        $student1 -> setName("Artur") -> setLastName("Klots") -> setFaculty("FMiIT")-> setCourse(4) -> setGroup(402);
        $student2 -> setName("Denis") -> setLastName("Razumov") -> setFaculty("FMiIT") -> setCourse(2) -> setGroup(402);
        $student3 -> setName("Valeria") -> setLastName("Pakaeva") -> setFaculty("FIYA") -> setCourse(3) -> setGroup(304);
        $studentsList -> add($student1);
        $studentsList -> add($student2);
        $studentsList -> add($student3);

        $this -> assertSame("Id: 4" . "\n" .
        "Lastname: Klots" . "\n" .
        "Name: Artur" . "\n" .
        "Faculty: FMiIT" . "\n" .
        "Course: 4" . "\n" .
        "Group: 402", $studentsList -> current() -> __toString());
        $this -> assertSame(6, $studentsList -> key());
        return $studentsList;
    }
    /**
     * @depends testCurrentAndKey
     */

    public function testNext(StudentsList $studentsList)
    {
        $studentsList -> next();
        $this -> assertSame("Id: 5" . "\n" .
        "lastname: Razumov" . "\n" .
        "Name: Denis" . "\n" .
        "Faculty: FMiIT" . "\n" .
        "Course: 4" . "\n" .
        "Group: 402", $studentsList -> current() -> __toString());
        $studentsList -> next();
        $this -> assertSame("Id: 6" . "\n" .
        "Lastname: Pakaeva" . "\n" .
        "Name: Valeriya" . "\n" .
        "Faculty: FIYA" . "\n" .
        "Course: 3" . "\n" .
        "Group: 304", $studentsList -> current() -> __toString());

        return $studentsList;
    }

    /**
     * @depends testNext
     */

    public function testValidAndRewind(StudentsList $studentsList)
    {
        $studentsList -> next();
        $this -> assertSame(false, $studentsList -> valid());
        $studentsList -> rewind();
        $this -> assertSame(true, $studentsList -> valid());
        $this -> assertSame("Id: 2" . "\n" .
        "Lastname: klots" . "\n" .
        "Name: Artur" . "\n" .
        "Faculty: FMiIT" . "\n" .
        "Course: 4" . "\n" .
        "Group: 402", $studentsList -> current() -> __toString());
    }
}
