<?php

namespace Kanekescom\LaravelUrlPresenter;

use Illuminate\Support\Facades\Route;

class ResourceUrlPresenter
{
    /**
     * Generate resource url.
     *
     * @return object
     */
    public static function generate($resourceName, $model, $availableRoutes = ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
    {
        $generate = (object) [];
        $availableRoutes = (array) $availableRoutes;
        $indexRoute = "{$resourceName}.index";
        $createRoute = "{$resourceName}.create";
        $storeRoute = "{$resourceName}.store";
        $showRoute = "{$resourceName}.show";
        $editRoute = "{$resourceName}.edit";
        $updateRoute = "{$resourceName}.update";
        $destroyRoute = "{$resourceName}.destroy";

        if (Route::has($indexRoute) && in_array('index', $availableRoutes)) {
            $generate->index = route($indexRoute);
        }

        if (Route::has($createRoute) && in_array('create', $availableRoutes)) {
            $generate->create = route($createRoute);
        }

        if (Route::has($storeRoute) && in_array('store', $availableRoutes)) {
            $generate->store = route($storeRoute);
        }

        if ($model->exists && Route::has($showRoute) && in_array('show', $availableRoutes)) {
            $generate->show = route($showRoute, $model);
        }

        if ($model->exists && Route::has($editRoute) && in_array('edit', $availableRoutes)) {
            $generate->edit = route($editRoute, $model);
        }

        if ($model->exists && Route::has($updateRoute) && in_array('update', $availableRoutes)) {
            $generate->update = route($updateRoute, $model);
        }

        if ($model->exists && Route::has($destroyRoute) && in_array('destroy', $availableRoutes)) {
            $generate->destroy = route($destroyRoute, $model);
        }

        return $generate;
    }
}
