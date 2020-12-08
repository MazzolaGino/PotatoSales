<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Password extends Constraint
{
    public $message = 'Password or username is not correct';
}