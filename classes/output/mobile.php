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
        ];
    }

}
