<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $budget = 300;
        $lessThanBudgetSweets = getSweetsLessThanBudget($sweets, $budget);
        $key = getRandomKeys($lessThanBudgetSweets, $budget);
        $combination = makeCombination($lessThanBudgetSweets, $key);
        return $combination;
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $lessThanBudgetSweets = array_filter(function ($sweets) {
            return $sweets['price'] <= $budget;
        }, $sweets);
        return $lessThanBudgetSweets;

    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        $keys = array_rand($lessThanBudgetSweets, 3);
        return $keys;
    }

    private function makeCombination(array $sweets, array $keys)
    {
        $combination = [];
        $totalPrice = 0;
        foreach ($keys as $key) {
            $combination[] = $sweets[$key];
            $totalPrice += $sweets[$key]['price'];
        }
        if ($totalPrice > 300) {
            return $this->main($sweets);
        }
        return $combination;
    }
}
