<?php

/**
 * AppserverIo\Phar\Receiver
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
 * Interfaces for all PHAR receiver.
 *
 * @category  Library
 * @package   Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/phar
 * @link      http://www.appserver.io
 */
interface Receiver
{

    /**
     * Exectues the receiver functionality.
     *
     * @return void
     */
    public function execute();

    /**
     * Returns name of the PHAR archive.
     *
     * @return string The name of the PHAR archive
     */
    public function getPharName();
}
