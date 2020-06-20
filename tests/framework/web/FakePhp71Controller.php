<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiiunit\framework\web;

use yii\web\Controller;
use yii\web\Request;
use yiiunit\framework\web\stubs\VendorImage;

/**
 * @author Sam Mousa<sam@mousa.nl>
 * @since 2.0.36
 */
class FakePhp71Controller extends Controller
{
    public $enableCsrfValidation = false;

    public function actionInjection($before, Request $request, $between, VendorImage $vendorImage, Post $post = null, $after)
    {

    }

    public function actionNullableInjection(?Request $request, ?Post $post)
    {
    }
}
