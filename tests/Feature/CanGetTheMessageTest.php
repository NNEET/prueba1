<?php

namespace Prueba\Prueba1\Tests\Feature;

use Prueba\Prueba1\Tests\TestCase;

class CanGetTheMessageTest extends TestCase
{
    /** @test */
    function cat_get_the_message_test()
    {
        $this->get('hello-route')->assertSee("hola desde mi primer paquete, Ángel");
    }

    /** @test */
    function cat_get_the_message_test_a_view()
    {
        $this->withoutExceptionHandling();
        $this->get('hello-route')->assertViewIs('Prueba1::home');

    }
}