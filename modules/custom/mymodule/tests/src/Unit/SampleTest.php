<?php

namespace Drupal\Tests\mymodule\Unit;

use Drupal\Tests\UnitTestCase;

/**
 * Tests a sample functionality in My Module.
 *
 * @group mymodule
 */
class SampleTest extends UnitTestCase {

  /**
   * Tests a basic assertion.
   */
  public function testSample() {
    $this->assertTrue(TRUE, 'This is a sample test that always passes.');
    $this->assertEquals(2 + 2, 4, 'Basic math works.');
  }

}
