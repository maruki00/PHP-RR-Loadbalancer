<?php

require_once './Task.php';
require_once './RoundRobinScheduler.php';

use LoadBalancer\RoundRobinScheduler;
use LoadBalancer\Task;


// Example tasks
$tasks = [
    new Task("Task A", 10),
    new Task("Task B", 5),
    new Task("Task C", 81),
];

$timeQuantum = 3;

$scheduler = new RoundRobinScheduler();
$completedTasks = $scheduler->schedule($tasks, $timeQuantum);

echo "Order of task completion:\n";
foreach ($completedTasks as $task) {
    echo "<br/>".$task ;
}