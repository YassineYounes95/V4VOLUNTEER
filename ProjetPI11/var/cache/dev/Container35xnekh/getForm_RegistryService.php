<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormRegistry.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension.php';

return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(['Gregwar\\CaptchaBundle\\Type\\CaptchaType' => function () {
    return ${($_ = isset($this->services['captcha.type']) ? $this->services['captcha.type'] : $this->load('getCaptcha_TypeService.php')) && false ?: '_'};
}, 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => function () {
    return ${($_ = isset($this->services['fos_user.change_password.form.type']) ? $this->services['fos_user.change_password.form.type'] : ($this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('AppBundle\\Entity\\User'))) && false ?: '_'};
}, 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => function () {
    return ${($_ = isset($this->services['fos_user.profile.form.type']) ? $this->services['fos_user.profile.form.type'] : ($this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('AppBundle\\Entity\\User'))) && false ?: '_'};
}, 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => function () {
    return ${($_ = isset($this->services['fos_user.registration.form.type']) ? $this->services['fos_user.registration.form.type'] : ($this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('AppBundle\\Entity\\User'))) && false ?: '_'};
}, 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => function () {
    return ${($_ = isset($this->services['fos_user.resetting.form.type']) ? $this->services['fos_user.resetting.form.type'] : ($this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('AppBundle\\Entity\\User'))) && false ?: '_'};
}, 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => function () {
    return ${($_ = isset($this->services['fos_user.username_form_type']) ? $this->services['fos_user.username_form_type'] : $this->load('getFosUser_UsernameFormTypeService.php')) && false ?: '_'};
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->load('getForm_Type_EntityService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->load('getForm_Type_ChoiceService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => function () {
    return ${($_ = isset($this->services['form.type.file']) ? $this->services['form.type.file'] : $this->load('getForm_Type_FileService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->load('getForm_Type_FormService.php')) && false ?: '_'};
}]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.form.transformation_failure_handling']) ? $this->services['form.type_extension.form.transformation_failure_handling'] : $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->load('getForm_TypeExtension_Form_HttpFoundationService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->load('getForm_TypeExtension_Form_ValidatorService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->load('getForm_TypeExtension_Upload_ValidatorService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->load('getForm_TypeExtension_CsrfService.php')) && false ?: '_'};
    yield 5 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->load('getForm_TypeExtension_Form_DataCollectorService.php')) && false ?: '_'};
}, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : ($this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension())) && false ?: '_'};
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : ($this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension())) && false ?: '_'};
}, 1)], new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->load('getForm_TypeGuesser_ValidatorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->load('getForm_TypeGuesser_DoctrineService.php')) && false ?: '_'};
}, 2), NULL)], ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->load('getForm_ResolvedTypeFactoryService.php')) && false ?: '_'});
