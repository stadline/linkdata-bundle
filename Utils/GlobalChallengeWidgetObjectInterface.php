<?php

namespace Geonaute\LinkdataBundle\Utils;

interface GlobalChallengeWidgetObjectInterface
{
    const STATE_BEFORE = -1;
    const STATE_CURRENT = 0;
    const STATE_AFTER = 1;

    public function getState();

    public function getStartedAtAsDateTimeObject();

    public function getTargetUnitId();

//    public function getTargetUnit();

    public function getName();

    public function getBeforeMessage();

    public function getCurrentMessage();

    public function getAfterMessage();

    public function getProgress();
}
