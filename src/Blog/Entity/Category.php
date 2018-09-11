<?php
namespace Blog\Entity;


/**
 * Class Category
 * @package Blog\Entity
 *
 * @Entity(repositoryClass="Blog\Repository\CategoryRepository")
 * @Table(name="t_category")
 */
class Category
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
     * @var string $name
     *
     * @Column(name="name", type="string", length=30)
     */
    protected $name;
}