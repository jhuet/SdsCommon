<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Workflow;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface WorkflowInterface
{
    /**
     * The state the object will be in immediately after creation
     *
     * @return string
     */
    public function getStartState();

    /**
     * An array of strings will all possible state names
     *
     * @return array
     */
    public function getPossibleStates();

    /**
     * An array of Transition documents
     *
     * @return array
     */
    public function getTransitions();

    /**
     * Called each time the document state is changed
     *
     * @param object $document
     */
    public function update($document);
}
