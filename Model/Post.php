<?php

namespace MageMastery\Blog\Model;

use Magento\Framework\Model\AbstractModel;
//inject
use MageMastery\Blog\Model\ResourceModel\Post as PostResource;
class Post extends AbstractModel {

    protected function __construct() {
        $this->_init(PostResource::class);
    }
}