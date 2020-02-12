<?php

namespace src;

/**
 * Class Pair
 * @package src
 */
class Pair
{
    /**
     * @var string
     */
    private string $from;

    /**
     * @var string
     */
    private string $to;

    /**
     * Pair constructor.
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @param $object
     * @return bool
     */
    public function equals($object) : bool
    {
        return $this->from === $object->form && $this->to === $object->to;
    }

    /**
     * @return int
     */
    public function hashCode() : int
    {
        return 0;
    }

    public function __toString()
    {
        return $this->from . '_' . $this->to;
    }
}