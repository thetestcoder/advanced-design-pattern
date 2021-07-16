<?php


class Feed implements SplSubject
{

    private string $name;
    private array $observers = [];
    private string $content;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $observerHash = spl_object_hash($observer);
        $this->observers[$observerHash] = $observer;
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $observerHash = spl_object_hash($observer);
        unset($this->observers[$observerHash]);
    }

    public function breakOutNews($content)
    {
        $this->content  = $content;
        $this->notify();
    }

    public function getContent()
    {
        return "$this->content on $this->name";
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        foreach ($this->observers as $value){
            $value->update($this);
        }
    }
}