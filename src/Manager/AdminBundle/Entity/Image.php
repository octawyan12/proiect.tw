<?php

namespace Manager\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $mime_type;

    /**
     * @var string
     */
    private $original_filename;

    /**
     * @var string
     */
    private $hash;


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
     * Set filename
     *
     * @param string $filename
     * @return Image
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set mime_type
     *
     * @param string $mimeType
     * @return Image
     */
    public function setMimeType($mimeType)
    {
        $this->mime_type = $mimeType;

        return $this;
    }

    /**
     * Get mime_type
     *
     * @return string 
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Set original_filename
     *
     * @param string $originalFilename
     * @return Image
     */
    public function setOriginalFilename($originalFilename)
    {
        $this->original_filename = $originalFilename;

        return $this;
    }

    /**
     * Get original_filename
     *
     * @return string 
     */
    public function getOriginalFilename()
    {
        return $this->original_filename;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return Image
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * @ORM\PrePersist
     */
    public function prepareFile()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function prepareOldFile()
    {
        // Add your code here
    }

    /**
     * @ORM\PostPersist
     */
    public function uploadFile()
    {
        // Add your code here
    }

    /**
     * @ORM\PostUpdate
     */
    public function removeOldFile()
    {
        // Add your code here
    }

    /**
     * @ORM\PostRemove
     */
    public function removeFile()
    {
        // Add your code here
    }
}
