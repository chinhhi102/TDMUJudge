<?php declare(strict_types=1);
// Do not edit this file!
// Use configure with the right parameters, and run 'make' and 'make install'
// Variables you can change are in common-config.php and judgehost-config.php

// Generated from 'judgehost-static.php.in' on Thứ năm, 05 Tháng ba năm 2020 20:05:38 +07.

define('DOMJUDGE_VERSION', '7.2.0');

define('BINDIR',      '/home/chinhhi/domjudge/judgehost/bin');
define('ETCDIR',      '/home/chinhhi/domjudge/judgehost/etc');
define('LIBDIR',      '/home/chinhhi/domjudge/judgehost/lib');
define('LIBJUDGEDIR', '/home/chinhhi/domjudge/judgehost/lib/judge');
define('LOGDIR',      '/home/chinhhi/domjudge/judgehost/log');
define('RUNDIR',      '/home/chinhhi/domjudge/judgehost/run');
define('TMPDIR',      '/home/chinhhi/domjudge/judgehost/tmp');
define('JUDGEDIR',    '/home/chinhhi/domjudge/judgehost/judgings');
define('CHROOTDIR',   '/chroot/domjudge');
define('CGROUPDIR',   '/sys/fs/cgroup');

define('RUNUSER',     'domjudge-run');
define('RUNGROUP',    'domjudge-run');

// Possible exitcodes from testcase_run.sh and their meaning.
$EXITCODES = array (
    0   => 'correct',
    101 => 'compiler-error',
    102 => 'timelimit',
    103 => 'run-error',
    104 => 'no-output',
    105 => 'wrong-answer',
//  106 => 'presentation-error', /* dropped since 5.0 */
    107 => 'memory-limit', /* not in use internally */
    108 => 'output-limit',
    120 => 'compare-error',
/* Uncomment the next line(s) to accept internal errors in the judging
 * backend as outcome. WARNING: it is highly discouraged to enable
 * this, as the judgehost may be in an inconsistent state after an
 * internal error occurred and it is recommended to inspect manually.
 */
//  127 => 'internal-error',
);
