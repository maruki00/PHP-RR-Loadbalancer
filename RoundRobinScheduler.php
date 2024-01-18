<?php

namespace LoadBalancer;

class RoundRobinScheduler
{
    public function schedule($tasks, $timeQuantum)
    {
        $queue = $tasks;
        $completedTasks = [];

        while (!empty($queue)) {
            $task = array_shift($queue);

            if ($task->remainingTime <= $timeQuantum) {
                $completedTasks[] = $task->name;
            } else {
                $task->remainingTime -= $timeQuantum;
                $queue[] = $task;
            }
        }

        return $completedTasks;
    }
}
