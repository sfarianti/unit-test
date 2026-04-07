<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    use RefreshDatabase;

    
    public function it_can_create_a_task()
    {
        //Arrange
        $data = [
            'type' => 'Learn Unit Test using PHP Unit'

        ];

        //Act
        $task = Task::create($data);

        //Assert
        $this->assertInstanceOf(Task::class, $task);
        $this->assertEquals('Learn Laravel', $task->type);
    }
}
