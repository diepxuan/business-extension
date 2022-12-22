<?php
/**
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Meta\BusinessExtension\Block\Adminhtml;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Meta\BusinessExtension\Helper\FBEHelper;

class Common extends \Magento\Backend\Block\Template
{

    protected $_registry;
    protected $_fbeHelper;

    public function __construct(
        Context $context,
        Registry $registry,
        FBEHelper $fbeHelper,
        array $data = [])
    {
        $this->_registry = $registry;
        $this->_fbeHelper = $fbeHelper;
        parent::__construct($context, $data);
    }
}