<?php
/**
 * User class for demonstration
 */

declare(strict_types=1);

namespace App;

/**
 * User entity class
 */
class User
{
    private string $name;
    private string $email;
    private int $age;

    /**
     * User constructor
     * 
     * @param string $name User's name
     * @param string $email User's email
     * @param int $age User's age
     */
    public function __construct(string $name, string $email, int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    /**
     * Get user's name
     * 
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get user's email
     * 
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get user's age
     * 
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Check if user is adult
     * 
     * @return bool
     */
    public function isAdult(): bool
    {
        return $this->age >= 18;
    }

    /**
     * Get user info as string
     * 
     * @return string
     */
    public function getInfo(): string
    {
        return sprintf(
            "Name: %s, Email: %s, Age: %d",
            $this->name,
            $this->email,
            $this->age
        );
    }
}
