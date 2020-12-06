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
    public function getRouteAttribute()
    {
        $parentRoute = isset($this->parentRoute) && $this->parentRoute
            ? "{$this->parentRoute}."
            : $this->parentRoute;

        return "{$parentRoute}{$this->singleRoute}";
    }

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
