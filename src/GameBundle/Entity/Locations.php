<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table(name="locations")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\LocationsRepository")
 */
class Locations
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
     * @ORM\Column(name="LocationName", type="string", length=50)
     */
    private $locationName;

    /**
     * @var int
     *
     * @ORM\Column(name="Link_id", type="integer")
     */
    private $linkId;

    /**
     * @var int
     *
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;


    /**
    * @ORM\OneToMany(targetEntity="Users", mappedBy="locations")
    */
    private $users;
    public function __construct() {
    $this->users = new ArrayCollection();
    $this->links = new ArrayCollection();
    }

    /**
    * @ORM\ManyToMany(targetEntity="Links", inversedBy="locations")
    * @ORM\JoinTable(name="locations_links")
    */
    private $links;



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
     * Set locationName
     *
     * @param string $locationName
     * @return Locations
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Get locationName
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Set linkId
     *
     * @param integer $linkId
     * @return Locations
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;

        return $this;
    }

    /**
     * Get linkId
     *
     * @return integer
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Add users
     *
     * @param \GameBundle\Entity\Users $users
     * @return Locations
     */
    public function addUser(\GameBundle\Entity\Users $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \GameBundle\Entity\Users $users
     */
    public function removeUser(\GameBundle\Entity\Users $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add links
     *
     * @param \GameBundle\Entity\Links $links
     * @return Locations
     */
    public function addLink(\GameBundle\Entity\Links $links)
    {
        $this->links[] = $links;

        return $this;
    }

    /**
     * Remove links
     *
     * @param \GameBundle\Entity\Links $links
     */
    public function removeLink(\GameBundle\Entity\Links $links)
    {
        $this->links->removeElement($links);
    }

    /**
     * Get links
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Locations
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
