/**
 * JavaScript functionality for the Hello Concordia plugin.
 *
 * @module     local_helloconcordia/main
 * @package    local_helloconcordia
 * @copyright  2025 Concordia University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['jquery'], function($) {
    /**
     * Initializes the plugin's client-side functionality.
     *
     * @param {Object} config Configuration options
     */
    var init = function(config) {
        var message = config.message || 'Hello, concordia';
        var animation = config.animation || false;
        
        $(document).ready(function() {
            // Create the container and add the message
            var container = $('<div>').addClass('helloconcordia-container');
            if (animation) {
                container.addClass('with-animation');
            }
            
            var heading = $('<h3>').addClass('helloconcordia-heading').text('Concordia University');
            var messageElement = $('<p>').addClass('helloconcordia-message').text(message);
            
            container.append(heading).append(messageElement);
            
            // Add the container to the page, right after the header
            $('#page-header').after(container);
            
            // If animation is enabled, trigger the fade-in effect
            if (animation) {
                setTimeout(function() {
                    container.css('opacity', 1);
                }, 100);
            }
        });
    };

    return {
        init: init
    };
});