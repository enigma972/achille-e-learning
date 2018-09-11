<?php
namespace User\Entity;


/**
 * Class Notification
 * @package User\Entity
 *
 * @Entity(repositoryClass="User\Repository\NotificationRepository")
 * @Table(name="t_notification")
 */
class Notification
{
    /**
     * @var int $id
     *
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
