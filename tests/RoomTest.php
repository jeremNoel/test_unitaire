<?php

namespace App\tests\Units;

use App\Entity\Student;
use App\Entity\Room;
use App\Entity\Teacher;
use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase
{
    /**
     * @var
     */
    protected $room;

    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $teacher;

    /**
     * @var
     */
    private $student;

    /**
     * @var int
     */
    private $capacity_max = 30;

    /**
     * @var
     */
    private $startDate;

    /**
     * @var
     */
    private $endDate;

    protected function setUp(){
        $this->name = "B11";

        $this->teacher = new Teacher("John", "Doe", "John.Doe@gmail.com", "Development");
        $this->student = new Student("Julien", "Domange", "jdomange@gmail.com", "4IW2");

        $this->startDate = new DateTime();
        $this->startDate->setDate(2019, 6, 28);

        $this->endDate = new DateTime();
        $this->endDate->setDate(2019, 6, 29);

        $this->room = new Room($this->name, $this->teacher, $this->student, $this->capacity_max, $this->startDate, $this->endDate);

    }

    public function testSave() {
        $this->assertEquals(true, $this->room->isValid());
    }

    public function testStartDateIsUpperToCurrentDate() {
        $startDate = new DateTime();
        $startDate->setDate(2019, 6, 28);

        $this->room->setStartAt($startDate);
        $this->assertEquals(true,  $this->room->getStartAt() > new \DateTime('NOW'));
    }

    public function testEndDateIsUpperToStartDate(){

        $startDate = new DateTime();
        $startDate->setDate(2019, 6, 28);

        $endDate = new DateTime();
        $endDate->setDate(2020, 5, 28);

        $this->room->setStartAt($startDate);
        $this->room->setEndAt($endDate);

        $this->assertEquals(true, $this->room->getStartAt() < $this->room->getEndAt());
    }

    public function testMaxCapacityRoom(){

        $capacity = 32;
        $this->room->setCapacity($capacity);

        $this->assertEquals(true, $this->room->getCapacity() < $this->capacity_max);
    }






}