<?php
namespace Blog\Entity;


/**
 * Class Comment
 * @package Blog\Entity
 *
 * @Entity(repositoryClass="Blog\Repository\CommentRepository")
 * @Table(name="t_comment")
 */
class Comment
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
     * @var string $content
     *
     * @Column(name="content", type="text")
     */
    protected $content;

    /**
     * @var \DateTime
     *
     * @Column(name="comment_date", type="datetime")
     */
    protected $commentDate;

    /**
     * @var bool
     *
     * @Column(name="published_state", type="boolean")
     */
    protected $publishedState;


    public function __construct() {
        $this->commentDate = new \DateTime();
        $this->publishedState = false;
    }
}