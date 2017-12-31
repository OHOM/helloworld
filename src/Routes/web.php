<?php
/**
 * Created by PhpStorm.
 * User: ohom
 * Date: 17-12-27
 * Time: 下午1:47
 */

Route::get('helloworld', 'Ohom\HelloWorld\Controllers\HelloWorldController@index');

Route::get('test', function () {
    return view('HelloWorld::test.test');
});