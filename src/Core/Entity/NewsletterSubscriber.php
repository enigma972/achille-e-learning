<?php
namespace Core\Entity;


/**
 * Class NewsletterSubscriber
 * @package Core\Entity
 *
 * @Entity(repositoryClass="Core\Repository\NewsletterSubscriberRepository")
 * @Table(name="t_newsletter_subscriber")
 */
class NewsletterSubscriber
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
     * @var string $mail
     *
     * @Column(name="mail", type="string", length=100)
     */
    protected $mail;

    /**
     * @var \Datetime
     *
     * @Column(name="subscription_date", type="datetime")
     */
    protected $subscriptionDate;

    public function __construct() {
        $this->subscriptionDate = new \Datetime();
    }
}