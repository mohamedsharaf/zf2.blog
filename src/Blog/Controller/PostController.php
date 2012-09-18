<?php

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController,
	Zend\View\Model\ViewModel,
	Blog\Model\Post,
	Blog\Form\PostForm;   

class PostController extends AbstractActionController
{

	protected $postTable;

    public function getPostTable()
    {
        if (!$this->postTable) {
            $sm = $this->getServiceLocator();
            $this->postTable = $sm->get('Blog\Model\PostTable');
        }
        return $this->postTable;
    }

    public function indexAction()
    {
	    return array();
    }

    public function addAction()
    {
        $form = new PostForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $post = new Post();
            $form->setInputFilter($post->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $post->exchangeArray($form->getData());
                $this->getPostTable()->savePost($post);

                // Redirect to list of albums
                return $this->redirect()->toRoute('blog');
            }
        }
        return array('form' => $form);
    }
}
