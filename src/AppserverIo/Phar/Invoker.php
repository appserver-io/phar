<?php

/**
 * AppserverIo\Phar\Invoker
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/phar
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Phar;

/**
 * Invoker for all PHAR commands.
 *
 * @category  Library
 * @package   Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/phar
 * @link      http://www.appserver.io
 */
class Invoker
{

    /**
     * Command to create a new PHAR archive.
     *
     * @var \AppserverIo\Phar\Command
     */
    protected $createCommand;

    /**
     * Command to create a new PHAR archive.
     *
     * @param \AppserverIo\Phar\Command $createCommand The command instance
     *
     * @return void
     */
    public function setCreateCommand(Command $createCommand)
    {
        $this->createCommand = $createCommand;
    }

    /**
     * Creates a new PHAR archive.
     *
     * @return void
     */
    public function create()
    {
        $this->createCommand->execute();
    }
}
