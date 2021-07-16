<?php


class Student
{
    public string $name;
    public int $year;
    public string $grade;


    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @param string $grade
     */
    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }
}