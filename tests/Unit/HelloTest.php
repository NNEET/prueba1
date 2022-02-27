<?php

namespace Prueba\Prueba1\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Prueba\Prueba1\Models\Message;
use Prueba\Prueba1\Tests\TestCase;
use Prueba\Prueba1\Facades\Prueba1;

class HelloTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_returns_the_message()
    {
        $this->assertEquals(
            "hola desde mi primer paquete, Ángel",
            Prueba1::hello()
        );

        $this->assertEquals(
            "hola desde mi primer paquete, Luis",
            Prueba1::hello('Luis')
        );

        $this->assertEquals(
            "hola desde mi nuevo paquete, Ángel",
            hello()
        );
    }

    /** @test */
    function can_interact_with_models_and_databases()
    {
        $message = new Message();
        $message->content ='Hola desde la BBDD 2';
        $message->save();


        $this->assertEquals(
            "Hola desde la BBDD 2",
            Message::first()->content
        );

    }
}