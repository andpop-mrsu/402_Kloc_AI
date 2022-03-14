<?php

namespace App;

use App\Student;
use Iterator as Iterator;
use App\Logger;
use App\FileLogger;
use App\DBLogger;

class StudentsList implements Iterator
{
    private $students = array();
    private $logger;

    public function __construct(Logger $logger)
    {
        $this -> logger = $logger;
        $this -> logger -> log(date("d.m.Y"), date("H:i:s"), "New students list was created!");
    }

    public function add(Student $student)
    {
        array_push($this -> students, $student);
        $this -> logger -> log(date("d.m.Y"), date("H:i:s"), "New student was added in the list :-)");
    }

    public function count(): int
    {
        return count($this -> students);
    }

    public function get(int $n): Student
    {
        return $this -> students[$n - 1];
    }

    public function store(string $fileName)
    {
        file_put_contents($fileName, serialize($this -> students));
    }

    public function load(string $fileName)
    {
        if (!file_exists($fileName)) {
            return "File " . $fileName . " not exist!";
        }

        $this -> students = unserialize(file_get_contents($fileName));
    }

    public function current()
    {
        return current($this -> students);
    }

    public function key()
    {
        return current($this -> students) -> getId();
    }

    public function next()
    {
        return next($this -> students);
    }

    public function rewind()
    {
        reset($this -> students);
    }

    public function valid()
    {
        return $this -> current() !== false;
    }
}
