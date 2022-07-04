<?php

require(__DIR__.'/../../config.php');

$PAGE->set_context(context_system::instance());

echo $OUTPUT->render_from_template('local_sandbox/index', []);
