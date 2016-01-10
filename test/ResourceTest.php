<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2016 Richard Fussenegger
 * @license MIT
 */

namespace Fleshgrinder\Assertion;

final class ResourceTest extends VariableTest {

	/** @inheritDoc */
	protected function getMethodName() {
		return 'hasResourcesOnly';
	}

	/** @inheritDoc */
	protected function getDataTypesToExclude() {
		return ['resource_stream', 'resource_gd'];
	}

}