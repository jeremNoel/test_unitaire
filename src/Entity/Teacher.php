<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

class Teacher
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
     * @var array
     * @ORM\Column(type="string")
     */
    private $skills;

    /**
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="teachers")
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

    public function __construct($firstname = '', $lastname = '', $email = '', $skills = [], $room = '')
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->$email = $lastname;
        $this->skills = $skills;
        if(!empty($room)) {
            $this->room = $room;
        }
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
     * @return Teacher
     */
    public function setId(int $id): Teacher
    {
        $this->id = $id;
        return $this;
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
     * @return Teacher
     */
    public function setFirstname(string $firstname): Teacher
    {
        $this->firstname = $firstname;
        return $this;
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
     * @return Teacher
     */
    public function setLastname(string $lastname): Teacher
    {
        $this->lastname = $lastname;
        return $this;
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
     * @return Teacher
     */
    public function setEmail(string $email): Teacher
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param array $skills
     * @return Teacher
     */
    public function setSkills(array $skills): Teacher
    {
        $this->skills = $skills;
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
     * @return Teacher
     */
    public function setCreatedAt(\DateTime $createdAt): Teacher
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
     * @return Teacher
     */
    public function setUpdatedAt(\DateTime $updatedAt): Teacher
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
