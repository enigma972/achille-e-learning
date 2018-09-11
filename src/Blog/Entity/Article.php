<?php
namespace Blog\Entity;

/**
 * Class Article
 * @package Blog\Entity
 *
 * @Entity(repositoryClass="Blog\Repository\ArticleRepository")
 * @Table(name="t_article")
 */
class Article
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
     * @var string $title
     *
     * @Column(name="title", type="string", length=150)
     */
    protected $title;

    /**
     * @var string $content
     *
     * @Column(name="content", type="text")
     */
    protected $content;

    /**
     * @var \DateTime
     *
     * @Column(name="date_creation", type="datetime")
     */
    protected $dateCreation;


    public function __construct() {
        $this->dateCreation = new \DateTime();
    }
}