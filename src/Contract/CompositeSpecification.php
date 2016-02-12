<?php

namespace EventSourced\Contract;

interface CompositeSpecification extends Specification
{
    public function is_satisfied_by($arguments);
    
    public function and_x(Specification $specification);
    
    public function or_x(Specification $specification);

    public function not(Specification $specification);
}
