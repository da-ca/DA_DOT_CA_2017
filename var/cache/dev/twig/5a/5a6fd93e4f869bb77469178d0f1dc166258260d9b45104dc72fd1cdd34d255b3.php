<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_30c6eb1ea96e802f8c45615fee43a6f4d08faadd3d086b320219f59ab4e9a3f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_674c1479fb2ea336d190d8f7ddd8169d27073841a452262cd31ff7a04a7e0549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674c1479fb2ea336d190d8f7ddd8169d27073841a452262cd31ff7a04a7e0549->enter($__internal_674c1479fb2ea336d190d8f7ddd8169d27073841a452262cd31ff7a04a7e0549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fbddfd8d1c2db011a4279094270275e8b81bc891b816ee9506100c694b2599af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbddfd8d1c2db011a4279094270275e8b81bc891b816ee9506100c694b2599af->enter($__internal_fbddfd8d1c2db011a4279094270275e8b81bc891b816ee9506100c694b2599af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_674c1479fb2ea336d190d8f7ddd8169d27073841a452262cd31ff7a04a7e0549->leave($__internal_674c1479fb2ea336d190d8f7ddd8169d27073841a452262cd31ff7a04a7e0549_prof);

        
        $__internal_fbddfd8d1c2db011a4279094270275e8b81bc891b816ee9506100c694b2599af->leave($__internal_fbddfd8d1c2db011a4279094270275e8b81bc891b816ee9506100c694b2599af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
