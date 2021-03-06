<?php

namespace Participation;

use Pimcore\Model\Object\AbstractObject;

interface ManagerInterface
{

    /**
     * @return ConfirmationInterface
     */
    public function makeConfirmation();

    /**
     * @return CaptchaInterface
     */
    public function makeCaptcha();

    /**
     * @return AbstractObject
     * @throws \Exception
     */
    public function makeParticipation();
}