<?php

namespace AppBundle\Entity;

/**
 * UserTemas
 */
class UserTemas
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;

    /**
     * @var \AppBundle\Entity\Temas
     */
    private $tema;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return UserTemas
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return UserTemas
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tema
     *
     * @param \AppBundle\Entity\Temas $tema
     *
     * @return UserTemas
     */
    public function setTema(\AppBundle\Entity\Temas $tema = null)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return \AppBundle\Entity\Temas
     */
    public function getTema()
    {
        return $this->tema;
    }
}
