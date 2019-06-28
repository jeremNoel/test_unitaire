<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

class Student
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTeam(): string
    {
        return $this->team;
    }

    /**
     * @param string $team
     */
    public function setTeam(string $team): void
    {
        $this->team = $team;
    }

    /**
     * @return int
     */
    public function getRoom(): int
    {
        return $this->room;
    }

    /**
     * @param int $room
     */
    public function setRoom(int $room): void
    {
        $this->room = $room;
    }

    public function isValid() {
        if((is_int($this->getId()) && is_null($this->getId()))
            && (is_string($this->getEmail()) && is_null($this->getEmail()))
            && (is_string($this->getFirstname()) && is_null($this->getFirstname()))
            && (is_string($this->getLastname()) && is_null($this->getLastname()))
            && (is_string($this->getRoom())) && is_null($this->getRoom())) {
            return true;
        }
        return false;
    }



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
    private $firstname;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $lastname;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $team;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="students")
     */
    private $room;

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


}
