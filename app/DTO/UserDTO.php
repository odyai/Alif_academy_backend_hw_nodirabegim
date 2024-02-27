<?php

namespace App\DTO;

class UserDTO
{


    public function __construct(
        private string $name,
        private string $email,
        private string $password,
        private string $created_at = '',
        private string $updated_at = ''
    )
    {

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }



    public static function fromArray(array $data)
    {
        return new UserDTO(
            name: $data['name'],
            email: $data['email'],
            password: $data['password'],

        );

    }

}
