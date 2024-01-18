<?php



namespace LoadBalancer;


class Task
{

    public $remainingTime;

    public function __construct(public $name, public $burstTime)
    {
        $this->name = $name;
        $this->burstTime = $burstTime;
        $this->remainingTime = $burstTime;
    }
}