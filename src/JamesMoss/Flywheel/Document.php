<?php

namespace JamesMoss\Flywheel;

/**
 * Document
 *
 * Represents a document in Flywheel. Essentially this is a Plain Old PHP
 * Object (POPO).
 *
 * The only important property on this object is $__flywheelDocId. It's used
 * to ensure uniqueness when storing a document. You can set this yourself using
 * the `setId()` method or if omitted it will be autogenerated for you.
 */
class Document
{
    protected $__flywheelDocId;
    protected $__flywheelInitialId;

    /**
     * Constructor
     *
     * @param array $data An associative array, each key/value pair will be
     *                    turned into properties on this object.
     */
    public function __construct(array $data = array())
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * Set the document ID.
     *
     * @param string $id
     */
    public function setId($id)
    {
        if(!isset($this->__flywheelInitialId)) {
            $this->__flywheelInitialId = $id;
        }

        $this->__flywheelDocId = $id;
    }

    /**
     * Get the document ID.
     *
     * @return string
     */
    public function getId()
    {
        return $this->__flywheelDocId;
    }

    /**
     * Get the initial document ID.
     *
     * @return string
     */
    public function getInitialId()
    {
        return $this->__flywheelInitialId;
    }
}
