<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_View
 */

namespace Zend\View\Model;

/**
 * Interface describing methods for clearing the state of a view model.
 *
 * View models implementing this interface allow clearing children, options,
 * and variables.
 *
 * @category   Zend
 * @package    Zend_View
 * @subpackage Model
 */
interface ClearableModelInterface
{
    public function clearChildren();
    public function clearOptions();
    public function clearVariables();
}
