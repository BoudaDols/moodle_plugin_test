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
 * Library functions for the Hello Concordia plugin.
 *
 * @package    local_helloconcordia
 * @copyright  2025 Concordia University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Extends the admin settings navigation to display the welcome message.
 *
 * @param navigation_node $navigation The navigation node to extend
 * @param stdClass $course The course object
 * @param context $context The context
 */
function local_helloconcordia_extend_navigation_admin_settings(navigation_node $navigation, $course, $context) {
    global $PAGE, $CFG;
    
    // Only continue if we're on an admin page
    if (!is_siteadmin()) {
        return;
    }
    
    // Check if the display setting is enabled
    $display = get_config('local_helloconcordia', 'display');
    if (empty($display)) {
        return;
    }

    // Get the welcome message
    $message = get_config('local_helloconcordia', 'message');
    if (empty($message)) {
        $message = get_string('welcome_message', 'local_helloconcordia');
    }

    // Get animation setting
    $animation = get_config('local_helloconcordia', 'animation');
    
    // Add the CSS and JS to the page
    $PAGE->requires->css('/local/helloconcordia/styles.css');
    $PAGE->requires->js_call_amd('local_helloconcordia/main', 'init', [
        'message' => $message,
        'animation' => $animation
    ]);
}