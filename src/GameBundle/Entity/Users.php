<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\UsersRepository")
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=100)
     */
    private $userName;

    /**
     * @var int
     *
     * @ORM\Column(name="Location_id", type="integer", nullable=true)
     */
    private $locationId;

    /**
    * @ORM\ManyToOne(targetEntity="Locations", inversedBy="user")
    * @ORM\JoinColumn(name="location_id", referencedColumnName="id")
    */
    private $location;

    /**
    * @ORM\ManyToMany(targetEntity="Locations", inversedBy="users")
    * @ORM\JoinTable(name="users_locations")
    */
    private $locations;
    public function __construct() {
    $this->locations = new ArrayCollection();
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
     * Set userName
     *
     * @param string $userName
     * @return Users
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set locationId
     *
     * @param integer $locationId
     * @return Users
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId
     *
     * @return integer
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
}
