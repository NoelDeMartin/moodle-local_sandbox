<?php

use local_sandbox\secrets;

require(__DIR__.'/../../config.php');

$PAGE->set_context(context_system::instance());

$question = optional_param('question', null, PARAM_RAW_TRIMMED);
$answer = empty($question) ? null : secrets::get($question);

echo $OUTPUT->render_from_template('local_sandbox/coverage', compact('question', 'answer'));
