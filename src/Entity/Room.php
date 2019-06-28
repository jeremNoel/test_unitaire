<?php


namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

class Room
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Teacher", mappedBy="room")
     */
    private $teachers;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $startAt;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $endAt;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Student", mappedBy="room")
     */
    private $students;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $capacity;


    public function __construct(String $name, Teacher $teachers, Student $student, int $capacity, \DateTime $startAt, \DateTime $endAt, \DateTime $createdAt, \DateTime $updatedAt)
    {
        $this->setName($name);
        $this->setTeachers($teachers);
        $this->setStudents($student);
        $this->setCapacity($capacity);
        $this->setStartAt($startAt);
        $this->setEndAt($endAt);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
    }

    public function isValid(){
        return $this->teachers->isValid() && $this->students->isValid() && $this->endAt > $this->startAt && count($this->students + 1) <= $this->capacity;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Room
     */
    public function setId(int $id): Room
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Room
     */
    public function setName(string $name): Room
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getTeachers(): ArrayCollection
    {
        return $this->teachers;
    }

    /**
     * @param ArrayCollection $teachers
     * @return Room
     */
    public function setTeachers(ArrayCollection $teachers): Room
    {
        $this->teachers = $teachers;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getStudents(): ArrayCollection
    {
        return $this->students;
    }

    /**
     * @param ArrayCollection $students
     * @return Room
     */
    public function setStudents(ArrayCollection $students): Room
    {
        $this->students = $students;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartAt(): \DateTime
    {
        return $this->startAt;
    }

    /**
     * @param \DateTime $startAt
     * @return Room
     */
    public function setStartAt(\DateTime $startAt): Room
    {
        $this->startAt = $startAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndAt(): \DateTime
    {
        return $this->endAt;
    }

    /**
     * @param \DateTime $endAt
     * @return Room
     */
    public function setEndAt(\DateTime $endAt): Room
    {
        $this->endAt = $endAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Room
     */
    public function setCreatedAt(\DateTime $createdAt): Room
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Room
     */
    public function setUpdatedAt(\DateTime $updatedAt): Room
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
