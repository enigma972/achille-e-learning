<?php
namespace Core\Entity;


/**
 * Class SupportMessage
 * @package Core\Entity
 *
 * @Entity(repositoryClass="Core\Repository\SupportMessageRepository")
 * @Table(name="t_support_message")
 */
class SupportMessage
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
     * @var string
     *
     * @Column(name="name", type="string", length=30)
     */
    protected $name;

    /**
     * @var string $mail
     *
     * @Column(name="mail", type="string", length=100)
     */
    protected $mail;

    /**
     * @var string
     *
     * @Column(name="object", type="string", length=50)
     */
    protected $object;

    /**
     * @var \DateTime
     *
     * @Column(name="send_date", type="datetime")
     */
    protected $sendDate;

    /**
     * @var string
     *
     * @Column(name="message", type="text")
     */
    protected $message;

    /**
     * @var bool
     *
     * @Column(name="read_state", type="boolean")
     */
    protected $readState;


    public function __construct() {
        $this->sendDate = new \DateTime();
        $this->readState = false;
    }
}