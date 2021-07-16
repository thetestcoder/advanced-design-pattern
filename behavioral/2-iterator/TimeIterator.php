<?php


class TimeIterator implements IteratorAggregate
{

    public function __construct($time)
    {
        $this->weekAgo   = $time - 604800;
        $this->yesterday = $time - 86400;
        $this->now       = $time;
        $this->tomorrow  = $time + 86400;
        $this->nextWeek  = $time + 604800;
    }

    /**
     * @inheritDoc
     */
    public function getIterator()
    {
        return new ArrayIterator($this);
    }
}