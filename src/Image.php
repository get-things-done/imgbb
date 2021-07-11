<?php
namespace GetThingsDone\Imgbb;

class Image
{
    protected $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function get($field)
    {
        return $this->data[$field] ?? null;
    }
}
