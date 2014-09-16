<?php

namespace Cms\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_role_idx", columns={"role_id"})})
 * @ORM\Entity
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=254, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=254, nullable=false)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Cms\CoreBundle\Entity\Role
     *
     * @ORM\ManyToOne(targetEntity="Cms\CoreBundle\Entity\Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;



    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set role
     *
     * @param \Cms\CoreBundle\Entity\Role $role
     * @return User
     */
    public function setRole(\Cms\CoreBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Cms\CoreBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * 
     * @return string
     */
    public function getUsername() 
    {
        return $this->name;
    }
    
    /**
     * 
     * @return null
     */
    public function getSalt()
    {
        return null;
    }
    
    /**
     * 
     * @return array
     */
    public function getRoles()
    {
        return array($this->getRole()->getName());
    }    
    
    /**
     * 
     * @return \Cms\CoreBundle\Entity\User
     */
    public function eraseCredentials()
    {
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,            
            $this->password
        ));
    }
    
    /**
     * 
     * @param string $serialized
     * @return \Cms\CoreBundle\Entity\User
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->email,
            $this->password
        ) = unserialize($serialized);
        
        return $this;
    }
    
    /**
     * 
     * @return boolean
     */
    public function isAccountNonExpired()
    {
        return true;
    }
    
    /**
     * 
     * @return boolean
     */
    public function isAccountNonLocked()
    {
        return true;
    }

    /**
     * 
     * @return boolean
     */
    public function isCredentialsNonExpired()
    {
        return true;
    }
    
    /**
     * 
     * @return boolean
     */
    public function isEnabled()
    {
        return (bool) $this->active;
    }
}