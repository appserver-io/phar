<?php

/**
 * AppserverIo\Phar\CreateReceiverTest
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
 * Receiver implementation to create a new PHAR archive.
 *
 * @category  Library
 * @package   Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/phar
 * @link      http://www.appserver.io
 */
class CreateReceiverTest extends \PHPUnit_Framework_TestCase
{

    /**
     * A PHAR name for testing purposes.
     *
     * @var string
     */
    const NAME = '/tmp/test.phar';

    /**
     * A directory name for testing purposes.
     *
     * @var string
     */
    const DIRECTORY = '.';

    /**
     * The receiver instance to test.
     *
     * @var \AppserverIo\Phar\CreateReceiver
     */
    protected $createReveiver;

    /**
     * Initializes the receiver instance to test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->createReveiver = new CreateReceiver(CreateReceiverTest::NAME, CreateReceiverTest::DIRECTORY);
    }

    /**
     * Test getPharName() method returns the value passed to the constructor.
     *
     * @return void
     */
    public function testGetPharName()
    {
        $this->assertSame(CreateReceiverTest::NAME, $this->createReveiver->getPharName());
    }
}
