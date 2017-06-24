<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9c540e5e91daa1509e39d7739ef11c09adb0d4ca719f6d04a88a75828ce9795d extends Twig_Template
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
        $__internal_0d66478fb78dfc4324e69f8854802ec3c0920a8cdd46d159f9c01c65afc8693e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d66478fb78dfc4324e69f8854802ec3c0920a8cdd46d159f9c01c65afc8693e->enter($__internal_0d66478fb78dfc4324e69f8854802ec3c0920a8cdd46d159f9c01c65afc8693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_219748310ad0cc7e53e70888bf63789084330d9382d153d290d722158a5b78f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219748310ad0cc7e53e70888bf63789084330d9382d153d290d722158a5b78f1->enter($__internal_219748310ad0cc7e53e70888bf63789084330d9382d153d290d722158a5b78f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0d66478fb78dfc4324e69f8854802ec3c0920a8cdd46d159f9c01c65afc8693e->leave($__internal_0d66478fb78dfc4324e69f8854802ec3c0920a8cdd46d159f9c01c65afc8693e_prof);

        
        $__internal_219748310ad0cc7e53e70888bf63789084330d9382d153d290d722158a5b78f1->leave($__internal_219748310ad0cc7e53e70888bf63789084330d9382d153d290d722158a5b78f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
