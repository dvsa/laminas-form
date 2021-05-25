<?php

namespace LaminasTest\Form\Annotation;

use Laminas\Form\Annotation;

class AttributeBuilderTest extends AbstractBuilderTestCase
{
    public function setUp(): void
    {
        parent::setUp();

        if (PHP_MAJOR_VERSION < 8) {
            $this->markTestSkipped('Attribute builder should only throw an exception prior to PHP 8.');
        }
    }

    protected function createBuilder(): Annotation\AbstractBuilder
    {
        return new Annotation\AttributeBuilder();
    }
}
