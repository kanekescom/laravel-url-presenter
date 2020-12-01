<?php

namespace Kanekescom\LaravelUrlPresenter;

use Illuminate\Support\Facades\Route;

class ResourceUrlPresenter
{
    /**
     * Generate resource url resource name load by model.
     *
     * @return object
     */
    public static function generate($model, $availableRoutes = ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
    {
        $generate = (object) [];
        $availableRoutes = (array) $availableRoutes;
        $indexRoute = "{$model->resource}.index";
        $createRoute = "{$model->resource}.create";
        $storeRoute = "{$model->resource}.store";
        $showRoute = "{$model->resource}.show";
        $editRoute = "{$model->resource}.edit";
        $updateRoute = "{$model->resource}.update";
        $destroyRoute = "{$model->resource}.destroy";

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

    /**
     * Generate resource url.
     *
     * @return object
     */
    public static function create($resource, $model, $availableRoutes = ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
    {
        $generate = (object) [];
        $availableRoutes = (array) $availableRoutes;
        $indexRoute = "{$resource}.index";
        $createRoute = "{$resource}.create";
        $storeRoute = "{$resource}.store";
        $showRoute = "{$resource}.show";
        $editRoute = "{$resource}.edit";
        $updateRoute = "{$resource}.update";
        $destroyRoute = "{$resource}.destroy";

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
