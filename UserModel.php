<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 12:15 AM
 */

 namespace app\core;


use app\core\db\DbModel;

/**
 * Class UserModel
 *
 * @author Keith Barreras <keith.barreras@gmail.com>
 * @package app\core
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}