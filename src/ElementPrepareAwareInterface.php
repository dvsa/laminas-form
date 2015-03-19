<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Form;

interface ElementPrepareAwareInterface
{
    /**
     * Prepare the form element (mostly used for rendering purposes)
     *
     * @param FieldsetInterface $form
     * @return mixed
     */
    public function prepareElement(FieldsetInterface $form);
}
