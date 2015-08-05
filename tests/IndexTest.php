<?php

class IndexTest extends TestCase
{
    /* See basic headers */
    public function testSeeHeaders()
    {
        $this->visit('/')->see('Q Calculator');
        $this->visit('/')->see('Addition');
        $this->visit('/')->see('Subtraction');
        $this->visit('/')->see('Multiplication');
        $this->visit('/')->see('Division');
    }
}
