<?php

use App\Models\Blog;
use App\Models\Product;

function createSlug($text) {
    // تبدیل کاراکترهای فارسی و عربی به معادل لاتین
    $text = str_replace(
        ['ا', 'ب', 'پ', 'ت', 'ث', 'ج', 'چ', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ک', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ی'],
        ['a', 'b', 'p', 't', 's', 'j', 'ch', 'h', 'kh', 'd', 'z', 'r', 'z', 'zh', 's', 'sh', 's', 'z', 't', 'z', 'a', 'gh', 'f', 'gh', 'k', 'g', 'l', 'm', 'n', 'v', 'h', 'y'],
        $text
    );

    // Remove any non-ASCII characters and replace them with hyphens
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($text));

    // Trim any extra dashes
    $slug = trim($slug, '-');

    return $slug;
}

function makeUniqueSlug($slug, $table) {
    $originalSlug = $slug;
    $counter = 1;

    switch($table) {
        case 'product':
            $dbSlug = Product::where('slug');
            break;
        case 'blog':
            $dbSlug = Blog::where('slug');
            break;
        default:
            throw new Exception('Invalid table name');
    }

    while (true) {
        $dbSlug = Product::where('slug');
        if ($dbSlug == $originalSlug)
        {
            $slug = "$originalSlug-$counter";
            $counter++;
        } else {
            break;
        }
    }
    return $slug;
}