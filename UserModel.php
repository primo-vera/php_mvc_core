<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 12:15 AM
 */

 namespace kb\phpmvc;


use kb\phpmvc\db\DbModel;

/**
 * Class UserModel
 *
 * @author Keith Barreras <keith.barreras@gmail.com>
 * @package kb\phpmvc
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}