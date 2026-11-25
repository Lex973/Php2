<?php

class Manager extends Employee
{
    public function calculateBonus(): float
    {
        return max(self::MIN_BONUS, $this->salary * 0.2);
    }
}
