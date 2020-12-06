<?php

namespace Kanekescom\LaravelUrlPresenter;

use Kanekescom\LaravelUrlPresenter\ResourceUrlPresenter;

trait HasUrlPresenter
{

    /**
     * Create url attribute.
     *
     * @return void
     */
    public function getUrlAttribute()
    {
        return ResourceUrlPresenter::generate($this);
    }
}
