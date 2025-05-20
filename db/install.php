<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Installation script for the Hello Concordia plugin.
 *
 * @package    local_helloconcordia
 * @copyright  2025 Concordia University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Custom installation procedure.
 */
function xmldb_local_helloconcordia_install() {
    global $CFG, $DB;

    // Set default configuration values
    set_config('display', 1, 'local_helloconcordia');
    set_config('message', get_string('welcome_message', 'local_helloconcordia'), 'local_helloconcordia');
    set_config('animation', 1, 'local_helloconcordia');
    
    return true;
}