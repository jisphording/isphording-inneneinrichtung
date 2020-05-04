<?php

class ShowcasePage extends Page
{
    public function images()
    {
        return $this->images()->sortBy('sort', 'ASC');
    }
}
