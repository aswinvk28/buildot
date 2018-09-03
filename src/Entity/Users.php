<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="FK_users", columns={"usertype"})})
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users implements AdvancedUserInterface, EquatableInterface, \Serializable
{
    const BLOCKED = -1;
    const DEACTIVATED = 0;
    const ACTIVATED = 1;
    const PUBLISHED = 2;
    
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var \Usertype
     *
     * @ORM\ManyToOne(targetEntity="Usertype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usertype", referencedColumnName="usertype")
     * })
     */
    private $usertype;
    
    private $roles;
    private $salt;
    
    public function __construct($email, $password, $salt, array $roles)
    {
        $this->email = $email;
        $this->password = $password;
        $this->salt = $salt;
        $this->roles = $roles;
    }

    public function getUserId() 
    {
        return $this->userId;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function getPassword() 
    {
        return $this->password;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getModified(): \DateTime 
    {
        return $this->modified;
    }

    public function getUsertype(): Usertype 
    {
        return $this->usertype;
    }

    public function setUserId($userId) 
    {
        $this->userId = $userId;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function setPassword($password) 
    {
        $this->password = $password;
    }

    public function setStatus($status) 
    {
        $this->status = $status;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setModified(\DateTime $modified) 
    {
        $this->modified = $modified;
    }

    public function setUsertype(Usertype $usertype) 
    {
        $this->usertype = $usertype;
    }

    public function setRole($role)
    {
        $usertype = new Usertype;
        $usertype->setUsertypename(ucfirst($role));
        $this->setUsertype($usertype);
    }

    public function eraseCredentials() 
    {
        return false;
    }

    public function getRoles() 
    {
        return $this->roles;
    }

    public function getSalt() 
    {
        return $this->salt;
    }

    public function getUsername(): string 
    {
        return $this->email;
    }

    public function isEqualTo(UserInterface $user): bool 
    {
        if (!$user instanceof Users) {
            return false;
        }

        if ($this->password !== $user->getPassword()) {
            return false;
        }

        if ($this->getSalt() !== $user->getSalt()) {
            return false;
        }

        if ($this->email !== $user->getUsername()) {
            return false;
        }

        return true;
    }

    public function isAccountNonExpired(): bool 
    {
        return $this->status != self::DEACTIVATED;
    }

    public function isAccountNonLocked(): bool 
    {
        return $this->status != self::BLOCKED;
    }

    public function isCredentialsNonExpired(): bool 
    {
        return true;
    }

    public function isEnabled(): bool 
    {
        return $this->status >= self::ACTIVATED;
    }
    
    public function serialize()
    {
        return serialize(
          $this->id,
          $this->email,
          $this->password,
          $this->usertype,
          $this->roles
        );
    }
    
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            $this->usertype,
            $this->roles
        ) = unserialize($serialized, ['allowed_classes' => false]);
    }

}
