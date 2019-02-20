<?php

declare(strict_types = 1);

namespace Sample;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{

    public function testSample(): void
    {
        assertThat(new Sample(), anInstanceOf(Sample::class));
    }
}
