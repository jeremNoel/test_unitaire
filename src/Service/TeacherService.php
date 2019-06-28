<?php

namespace App\Service;

use App\Entity\Teacher;
use App\Repository\TeacherRepository;

class TeacherService
{
    /**
     * @var TeacherRepository
     */
    private $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function isValidTeacher()
    {

    }
}