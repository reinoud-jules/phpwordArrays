<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @see         https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2018 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Writer\Associative\Element;

/**
 * TextRun element HTML writer
 *
 * @since 0.10.0
 */
class TextRun extends Text
{
    /**
     * Write text run
     *
     * @return string
     */
    public function write()
    {
        $writer = new Container($this->parentWriter, $this->element);

        $opening = $this->writeOpening();
        $type = $this->fetchType($opening);

        return array(
            'type' => $type, 
            'content' => $writer->write()
        );
    }
}
