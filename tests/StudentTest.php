<?php

// tests/Util/CalculatorTest.php
namespace App\Tests\Util;

use App\Entity\Room;
use App\Entity\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    public static function initStudent()
    {
        $student = new Student();
        $student->setFirstname("Jeremie");
        $student->setLastName("Noel");
        $student->setEmail("test@test.fr");
        $student->setId(1);
        $student->setRoom(1);
        return $student;
    }

    public function testIfStudentHaveFirstname() {
        $result = self::initStudent();

        $this->assertEquals("Jeremie", $result->getFirstname());
    }

    public function testIfStudentHaveLastname() {
        $result = self::initStudent();

        $this->assertEquals("Noel", $result->getLastname());
    }

    public function testIfStudentHaveEmail() {
        $result = self::initStudent();

        $this->assertEquals("test@test.fr", $result->getEmail());
    }

    public function testIfStudentHaveId() {
        $result = self::initStudent();

        $this->assertEquals(1, $result->getId());
    }

    public function testIfStudentIsNotComplete() {
        $result = new Student();
        $result->setId(1);
        $result->setEmail("test@test.fr");

        $this->assertFalse($result->isValid());
    }
}