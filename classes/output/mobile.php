<?php

namespace local_sandbox\output;

defined('MOODLE_INTERNAL') || die();

class mobile {

    public static function view_index() {
        global $OUTPUT;

        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $OUTPUT->render_from_template('local_sandbox/index', []),
                ],
            ],
            'otherdata' => ['radiofield' => 'two'],
        ];
    }

    public static function save_form($args) {
        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => '<div style="padding: 0 1rem">' .
                        "<p>Hidden: {$args['hiddenfield']}</p>" .
                        "<p>Date: {$args['datetimefield']}</p>" .
                        "<p>Radio: {$args['radiofield']}</p>" .
                    '</div>',
                ],
            ],
        ];
    }

}
