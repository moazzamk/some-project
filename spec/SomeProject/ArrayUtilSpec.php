<?php

namespace spec\SomeProject;

use PhpSpec\ObjectBehavior;

class ArrayUtilSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('\SomeProject\ArrayUtil');
    }

    public function it_returns_flat_arrays_as_is()
    {
        $this->flatten([1, 2, 3])->shouldBe([1, 2, 3]);
    }

    public function it_flattens_nested_arrays()
    {
        $this->flatten([[1,2,[3]],4])->shouldBe([1,2,3,4]);
    }
}