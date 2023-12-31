<?php

namespace MageMastery\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    private const TABLE_NAME = 'magemastery_blog_post';
    private const PRIMEARY_KEY = 'post_id';


    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::PRIMEARY_KEY);
    }
}
