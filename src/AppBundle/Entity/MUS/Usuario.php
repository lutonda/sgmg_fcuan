<?php

namespace AppBundle\Entity\MUS;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="Usuario")
 * @ORM\Entity
 */
class Usuario implements AdvancedUserInterface,  \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=500, nullable=true)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="string", length=50, nullable=true)
     */
    private $roles;
    private $r=array();

    /**
     * @var integer
     *
     * @ORM\Column(name="isActive", type="integer", nullable=true)
     */
    private $isactive;

    /**
     * @var integer
     *
     * @ORM\Column(name="exLogica", type="integer", nullable=true)
     */
    private $exLogica;

    /**
     * @var Pessoa
     *
     */
    private $pessoa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set username
     *
     * @param string $username
     *
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
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
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Usuario
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set roles
     *
     * @param string $roles
     *
     * @return Usuario
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return array($this->roles);//$this->roles;//$this->roles;
    }



    /**
     * Set roles
     *
     * @return Usuario
     */
    public function setR($roles)
    {
        $this->r=$roles;//$this->roles;
        return $this;
    }
    /**
     * Set isactive
     *
     * @param integer $isactive
     *
     * @return Usuario
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get isactive
     *
     * @return integer
     */
    public function getIsactive()
    {
        return $this->isactive;
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
     * Set id
     *
     * @param integer $id
     *
     * @return Usuario
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set pessoa
     *
     * @param Pessoa $pessoa
     *
     * @return Usuario
     */
    public function setPessoa(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getPessoa()
    {
        return $this->id;
    }


    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isactive
// see section on salt below
// $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->isactive,
            ) = unserialize($serialized);
    }

    public function __construct()
    {
        $this->roles=array();
    }

    public function eraseCredentials() {

    }

    public function getRole() {
        return array('ROLE_ADMIN');
    }
    public function getR(){
        return $this->r;
    }

    /**
     * Get exLogica
     *
     * @return integer
     */
    public function getExLogica()
    {
        return $this->exLogica;
    }

    /**
     * Set exLogica
     *
     * @param integer $exLogica
     *
     * @return Visita
     */
    public function setExLogica($exLogica)
    {
        $this->exLogica = $exLogica;

        return $this;
    }

    public function addRole($role){
        //array_push($this->roles,$role);

            array_push($this->r,$role);

    }

    public function getSalt() {
        // you *may* need a real salt depending on your encoder
// see section on salt below
        return null;
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->isactive;
    }

    public function __toString() {
        return $this->getUsername();
    }

}
