<?php
namespace Core\Entity;


/**
 * Class Image
 * @package Core\Entity
 *
 * @Entity(repositoryClass="Core\Repository\ImageRepository")
 * @Table(name="t_image")
 */
class Image
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
     * @Column(name="name", type="string", length=100)
     */
    protected $name;

    /**
     * @var string
     *
     * @Column(name="absolute_path", type="string", length=255)
     */
    protected $absolutePath;
}