<?php

class Employee
{
    const H_LIMIT = 60;
    const MIN_RATE = 8;
    const H_PER_WEEK = 40;
    public int $basePay;
    public int $hoursWorked;

    function __construct($basePay, $hoursWorked)
    {
        $this->basePay = $basePay;
        $this->hoursWorked = $hoursWorked;
    }

    function weekWage()
    {
        $base = $this->get_basePay();
        $worked = $this->get_hoursWorked();

        if ($base < self::MIN_RATE) {
            return 'Employee has to low rate!' . PHP_EOL;
        } elseif ($worked > self::H_LIMIT) {
            return 'Employee has to much hr/per week!' . PHP_EOL;
        } elseif (self::H_PER_WEEK - $worked >= 0) {
            return 'Employee earned ' . $worked * $base . ' $' . PHP_EOL;
        } elseif (self::H_PER_WEEK - $worked < 0) {
            return 'Employee earned ' . (self::H_PER_WEEK * $base + ($worked - self::H_PER_WEEK)) * 1.5 * $base . ' $' . PHP_EOL;
        }
    }

    function get_basePay()
    {
        return $this->basePay;
    }

    function get_hoursWorked()
    {
        return $this->hoursWorked;
    }

}

$employee1 = new Employee(7.50, 35);
$employee2 = new Employee(8.20, 47);
$employee3 = new Employee(10.00, 73);

echo $employee1->weekWage();
echo $employee2->weekWage();
echo $employee3->weekWage();

