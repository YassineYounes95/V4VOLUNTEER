<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'captcha.type' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\gregwar\\captcha-bundle\\Type\\CaptchaType.php';

return $this->services['captcha.type'] = new \Gregwar\CaptchaBundle\Type\CaptchaType(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'}, ${($_ = isset($this->services['gregwar_captcha.generator']) ? $this->services['gregwar_captcha.generator'] : $this->load('getGregwarCaptcha_GeneratorService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, $this->getParameter('gregwar_captcha.config'));