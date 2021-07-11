<?php

namespace GetThingsDone\Imgbb;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetThingsDone\Imgbb\Skeleton\SkeletonClass
 */
class ImgbbFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'imgbb';
    }
}
