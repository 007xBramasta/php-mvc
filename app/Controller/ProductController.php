<?php

namespace Bramasta\Belajar\PHP\MVC\Controller;

class ProductController
{
    
    function categories(string $productId, string $categoryId): void
    {
        echo "PRODUCT $productId, CATEGORY $categoryId";
    }

}