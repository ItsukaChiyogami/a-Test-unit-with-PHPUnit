<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_task()
    {
        // Arrange
        $data = [
            'title' => 'Learn Laravel',
            'description' => 'Write unit tests for Laravel applications'
        ];

        // Act
        $task = Task::create($data);

        // Assert
        $this->assertInstanceOf(Task::class, $task);
        $this->assertEquals('Learn Laravel', $task->title);
        $this->assertEquals('Write unit tests for Laravel applications', $task->description);
    }
}