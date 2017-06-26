<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/6/26
 * Time: 16:25
 */
require 'vendor/autoload.php';


//$samples = [['苹果', '西瓜', '番茄'], ['西瓜', '土豆', '香蕉'], ['苹果', '西瓜', '土豆'], ['西瓜', '豆角', '番茄']];
//$labels  = ['苹果','西瓜','番茄','土豆','香蕉','豆角'];

$samples = [['1', '6', '5'], ['4', '3', '2'], ['4', '2', '1'], ['3', '4', '5']];
$labels  = ['1','2','3','4','5'.'6'];

use Phpml\Association\Apriori;

$associator = new Apriori($support = 0.5, $confidence = 0.2);
$associator->train($samples, $labels);

//$a = $associator->predict(['4','2']);
// return [[['beta']]]
//var_dump($a);
//$b = $associator->predict([['alpha','epsilon'],['beta','theta']]);
// return [[['beta']], [['alpha']]]


$rules = $associator->getRules();
//var_dump($rules);

$c = $associator->apriori();
var_dump($c);