<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Helpers\Renderers;

use Ivory\GoogleMap\Map;

/**
 * Map center renderer.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class MapCenterRenderer
{
    /**
     * Renders a map center.
     *
     * @param \Ivory\GoogleMap\Map $map The map.
     *
     * @return string The rendered map center.
     */
    public function render(Map $map)
    {
        return sprintf('%s.setCenter(%s)', $map->getVariable(), $map->getCenter()->getVariable());
    }
}