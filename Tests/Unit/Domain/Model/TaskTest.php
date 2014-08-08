<?php
namespace Webfox\T3events\Tests\Unit\Domain\Model;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dirk Wenzel <wenzel@webfox01.de>, Agentur Webfox
 *  			Michael Kasten <kasten@webfox01.de>, Agentur Webfox
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Webfox\T3events\Domain\Model\Task.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Events
 *
 * @author Dirk Wenzel <wenzel@webfox01.de>
 * @author Michael Kasten <kasten@webfox01.de>
 */
class TaskTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Webfox\T3events\Domain\Model\Task
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Webfox\T3events\Domain\Model\Task();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { 
		$this->assertSame(
			NULL,
			$this->fixture->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getActionReturnsInitialNull() { 
		$this->assertSame(
			NULL,
			$this->fixture->getAction()
		);
	}

	/**
	 * @test
	 */
	public function setActionForIntegerSetsAction() { 
		$this->fixture->setAction(12);

		$this->assertSame(
			12,
			$this->fixture->getAction()
		);
	}
	
	/**
	 * @test
	 */
	public function getPeriodReturnsInitialNull(){
		$this->assertSame(
			NULL,
			$this->fixture->getPeriod()
		);
	}
	
	/**
	 * @test
	 */
	public function setPeriodForIntegerSetsPeriod(){
		$this->fixture->setPeriod(-30000);
		
		$this->assertSame(
				-30000,
				$this->fixture->getPeriod()
				);
	}
	
	/**
	 * @test
	 */
	public function getOldStatusReturnsInitialNull() { 
		$this->assertSame(
			NULL,
			$this->fixture->getOldStatus()
		);
	}

	/**
	 * @test
	 */
	public function setOldStatusForPerformanceStatusSetsOldStatus() {
		$status = new \Webfox\T3events\Domain\Model\PerformanceStatus(); 
		$this->fixture->setOldStatus($status);

		$this->assertSame(
			$status,
			$this->fixture->getOldStatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getNewStatusReturnsInitialNull() { 
		$this->assertSame(
			NULL,
			$this->fixture->getNewStatus()
		);
	}

	/**
	 * @test
	 */
	public function setNewStatusForPerformanceStatusSetsNewStatus() { 
		$status = new \Webfox\T3events\Domain\Model\PerformanceStatus(); 
		$this->fixture->setNewStatus($status);

		$this->assertSame(
			$status,
			$this->fixture->getNewStatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getFolderReturnsInitialNull() { 
		$this->assertSame(
			NULL,
			$this->fixture->getFolder()
		);
	}

	/**
	 * @test
	 */
	public function setFolderForStringSetsFolder() { 
		$this->fixture->setFolder('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFolder()
		);
	}
	
}
