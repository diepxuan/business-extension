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

namespace Meta\Conversion\Block\Pixel;

/**
 * @api
 */
class ViewCategory extends Common
{
    /**
     * Get Category name
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->getLayout()->getBlock('category.description')->getCurrentCategory()->getName();
    }

    /**
     * Get Event name
     *
     * @return string
     */
    public function getEventToObserveName()
    {
        return 'facebook_businessextension_ssapi_view_category';
    }

    /**
     * Get Category Id
     *
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->getLayout()->getBlock('category.description')->getCurrentCategory()->getId();
    }

    /*
     * @return mixed
     */
    public function getCategoryId()
    {
        $category = $this->registry->registry('current_category');
        return $category->getId();
    }
}
