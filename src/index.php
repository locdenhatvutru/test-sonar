<?php
/**
 * Simple PHP Application
 * Demonstration file for SonarQube scanning
 */

declare(strict_types=1);

namespace App;

/**
 * Calculator class for basic mathematical operations
 */
class Calculator
{
    /**
     * Add two numbers
     * 
     * @param float $a First number
     * @param float $b Second number
     * @return float Sum of the two numbers
     */
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    /**
     * Subtract two numbers
     * 
     * @param float $a First number
     * @param float $b Second number
     * @return float Difference of the two numbers
     */
    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    /**
     * Multiply two numbers
     * 
     * @param float $a First number
     * @param float $b Second number
     * @return float Product of the two numbers
     */
    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * Divide two numbers
     * 
     * @param float $a Numerator
     * @param float $b Denominator
     * @return float Result of division
     * @throws \InvalidArgumentException When dividing by zero
     */
    public function divide(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new \InvalidArgumentException("Cannot divide by zero");
        }
        
        return $a / $b;
    }
}

// Example usage
$calculator = new Calculator();

echo "Calculator Demo\n";
echo "===============\n\n";

echo "5 + 3 = " . $calculator->add(5, 3) . "\n";
echo "10 - 4 = " . $calculator->subtract(10, 4) . "\n";
echo "6 * 7 = " . $calculator->multiply(6, 7) . "\n";
echo "20 / 4 = " . $calculator->divide(20, 4) . "\n";

echo "\nApplication completed successfully!\n";
