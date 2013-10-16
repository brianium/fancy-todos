<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Model\Todo;
use Doctrine\ODM\MongoDB\DocumentManager;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\View\Model\JsonModel;

class TodosController extends AbstractRestfulController
{
    /**
     * @var \Doctrine\ODM\MongoDB\DocumentManager
     */
    private $manager;

    /**
     * @var \Zend\Stdlib\Hydrator\ClassMethods
     */
    private $hydrator;

    public function __construct(DocumentManager $manager)
    {
        $this->manager = $manager;
        $this->hydrator = new ClassMethods();
    }

    public function create($data)
    {
        $todo = $this->hydrator->hydrate($data, new Todo());
        $this->manager->persist($todo);
        $this->manager->flush();
        return new JsonModel($this->hydrator->extract($todo));
    }

    public function getList()
    {
        $todos = $this->manager->getRepository('Application\Model\Todo')->findAll();
        $response = [];
        foreach ($todos as $todo)
            $response[] = $this->hydrator->extract($todo);
        return new JsonModel($response);
    }


}
