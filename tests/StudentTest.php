<?php

// tests/Util/CalculatorTest.php
namespace App\Tests\Util;

use App\Entity\Room;
use App\Entity\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    /**
     * @var Student
     */
    protected $student;

    public function setUp(): void
    {
        $student = new Student();
        $student->setFirstname("Jeremie");
        $student->setLastName("Noel");
        $student->setEmail("test@test.fr");
        $student->setId(1);
        $student->setRoom(1);
        $this->student = $student;
    }

    public function testIfStudentHaveFirstname() {

        $this->assertEquals("Jeremie", $this->student->getFirstname());
    }

    public function testIfStudentHaveLastname() {

        $this->assertEquals("Noel", $this->student->getLastname());
    }

    public function testIfStudentHaveEmail() {

        $this->assertEquals("test@test.fr", $this->student->getEmail());
    }

    public function testIfStudentHaveId() {

        $this->assertEquals(1, $this->student->getId());
    }

    public function testIfStudentIsNotComplete() {
        $result = new Student();
        $result->setId(1);
        $result->setEmail("test@test.fr");

        $this->assertFalse($result->isValid());
    }
}