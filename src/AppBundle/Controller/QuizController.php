<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Quiz controller.
 *
 */
class QuizController extends Controller
{
    /**
     * Lists all quiz entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $quizzes = $em->getRepository('AppBundle:Quiz')->findAll();

        return $this->render('quiz/index.html.twig', array(
            'quizzes' => $quizzes,
        ));
    }

    /**
     * Creates a new quiz entity.
     *
     */
    public function newAction(Request $request)
    {
        $quiz = new Quiz();
        $form = $this->createForm('AppBundle\Form\QuizType', $quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();

            return $this->redirectToRoute('quiz_show', array('id' => $quiz->getId()));
        }

        return $this->render('quiz/new.html.twig', array(
            'quiz' => $quiz,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a quiz entity.
     *
     */
    public function showAction(Quiz $quiz)
    {
        $deleteForm = $this->createDeleteForm($quiz);

        return $this->render('quiz/show.html.twig', array(
            'quiz' => $quiz,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing quiz entity.
     *
     */
    public function editAction(Request $request, Quiz $quiz)
    {
        $deleteForm = $this->createDeleteForm($quiz);
        $editForm = $this->createForm('AppBundle\Form\QuizType', $quiz);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quiz_edit', array('id' => $quiz->getId()));
        }

        return $this->render('quiz/edit.html.twig', array(
            'quiz' => $quiz,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a quiz entity.
     *
     */
    public function deleteAction(Request $request, Quiz $quiz)
    {
        $form = $this->createDeleteForm($quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quiz);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_index');
    }

    /**
     * Creates a form to delete a quiz entity.
     *
     * @param Quiz $quiz The quiz entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Quiz $quiz)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quiz_delete', array('id' => $quiz->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
