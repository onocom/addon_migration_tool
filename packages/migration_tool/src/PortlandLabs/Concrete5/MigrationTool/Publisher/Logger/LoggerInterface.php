<?php
namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Logger;

use Concrete\Core\Entity\Site\Site;
use Concrete\Core\Entity\User\User;
use PortlandLabs\Concrete5\MigrationTool\Batch\BatchInterface;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\Batch;

defined('C5_EXECUTE') or die("Access Denied.");

interface LoggerInterface
{

    function getLog();
    function openLog(Batch $batch, User $user = null);
    function closeLog(Batch $batch);
    function logPublished(LoggableInterface $object, $mixed = null);
    function logSkipped(LoggableInterface $object);

}