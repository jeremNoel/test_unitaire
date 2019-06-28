<?php

// tests/Util/CalculatorTest.php
namespace App\Tests\Util;

use App\Entity\Teacher;
use PHPUnit\Framework\TestCase;

class TeacherTest extends TestCase
{
    /**
     * @var Teacher
     */
    protected $teacher;

    protected function setUp(): void
    {
        $this->teacher = new Teacher('Jean', 'Dupont', 'jean-dupont@test.com', ['french']);
    }

    public function testTeacherHasStringFirstName()
    {
        $this->teacher->setFirstname('Jeanne');
        $this->assertEquals('Jeanne', $this->teacher->getFirstname());
    }

    /*public function testTeacherHasNotStringFirstName()
    {
        $this->teacher->setFirstname(null);
        $this->expectException(\TypeError::class);
    }*/

    public function testTeacherHasStringLastName()
    {
        $this->teacher->setLastname('Duponne');
        $this->assertEquals('Duponne', $this->teacher->getLastname());
    }

    /*public function testTeacherHasNotStringLastName()
    {

    }*/

    public function testTeacherHasStringValidEmail()
    {
        $this->teacher->setEmail()
    }

    /*public function testTeacherHasStringNotValidEmail()
    {

    }

    public function testTeacherHasNotStringEmail()
    {

    }

    /**public function testTeacherIsValid() {

        $this->assertEquals(true, $this->user->isValid());
    }*/
}