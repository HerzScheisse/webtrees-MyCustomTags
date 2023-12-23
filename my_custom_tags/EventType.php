<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2023 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Jefferson49\Webtrees\Module\MyCustomTags;

use Fisharebest\Webtrees\Elements\AbstractElement;

/**
 * Event custom types
 */

class EventType extends AbstractElement
{
    /**
     * Convert a value to a canonical form.
     *
     * @param string $value
     *
     * @return string
     */
    public function canonical(string $value): string
    {
        return parent::canonical($value);
    }

    /**
     * A list of controlled values for this element
     *
     * @return array<int|string,string>
     */
    public function values(): array
    {
        return [
            ''                          => '',
            'Einweihung'                => 'Einweihung',
            'Ehrung'                    => 'Ehrung',
            'Gerichtsverhandlung'       => 'Gerichtsverhandlung',
            'Jubiläum'                  => 'Jubiläum',
            'Kirchenaustritt'           => 'Kirchenaustritt',
            'Kircheneintritt'           => 'Kircheneintritt',
            'Treffen'                   => 'Treffen',
        ];
    }
}
