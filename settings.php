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
 * Settings for the Hello Concordia plugin.
 *
 * @package    local_helloconcordia
 * @copyright  2025 Concordia University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage(
        'local_helloconcordia',
        get_string('pluginname', 'local_helloconcordia')
    );

    $ADMIN->add('localplugins', $settings);

    $settings->add(new admin_setting_configcheckbox(
        'local_helloconcordia/display',
        get_string('display_setting', 'local_helloconcordia'),
        get_string('display_setting_desc', 'local_helloconcordia'),
        1
    ));

    $settings->add(new admin_setting_configtext(
        'local_helloconcordia/message',
        get_string('message_setting', 'local_helloconcordia'),
        get_string('message_setting_desc', 'local_helloconcordia'),
        get_string('welcome_message', 'local_helloconcordia')
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_helloconcordia/animation',
        get_string('animation_setting', 'local_helloconcordia'),
        get_string('animation_setting_desc', 'local_helloconcordia'),
        1
    ));
}