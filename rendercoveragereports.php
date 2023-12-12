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

@ini_set('memory_limit','256M');

use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Driver\Selector;
use SebastianBergmann\CodeCoverage\Filter;

require(__DIR__.'/../../vendor/autoload.php');

// Modify this line to 'behat' or 'combined' to change the generated report
$output = 'behat';

$filter = new Filter();
$driverSelector = new Selector();
$filter->includeDirectory('/var/www/html/local/sandbox');
$filter->excludeDirectory('/var/www/html/local/sandbox/tests');
$driver = $driverSelector->forLineCoverage($filter);
$coverage = new CodeCoverage($driver, $filter);

$behatcoverage = include '/var/www/html/local/sandbox/reports/default.cov';
$coverage->merge($behatcoverage);

if ($output === 'combined') {
    $phpunitcoverage = include '/var/www/html/local/sandbox/reports/phpunit.cov';

    $coverage->merge($phpunitcoverage);
}

$report = new \SebastianBergmann\CodeCoverage\Report\Html\Facade();

$report->process($coverage, "/var/www/html/local/sandbox/reports/$output");
