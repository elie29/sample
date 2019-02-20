<?php

declare(strict_types = 1);

namespace Sample;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{

    public function testSample(): void
    {
        $sample = new Sample();

        assertThat($sample, anInstanceOf(Sample::class));
        assertThat((string) $sample, equalTo(Sample::class));
    }
}
