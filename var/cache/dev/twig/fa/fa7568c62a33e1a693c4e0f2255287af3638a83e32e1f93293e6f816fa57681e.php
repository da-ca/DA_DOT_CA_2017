<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_042fa6539977e0c6ce65b10bfa714b76e34e9d11e7a112f2c9eaf3d2c82db886 extends Twig_Template
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
        $__internal_9cc47606726ec63247edd29267c86ab9d25b16378e93693e5771e8caffb80564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc47606726ec63247edd29267c86ab9d25b16378e93693e5771e8caffb80564->enter($__internal_9cc47606726ec63247edd29267c86ab9d25b16378e93693e5771e8caffb80564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_602055eea99d87947de0bd8460926c24c088f840f647d0727fffc1c9e025c39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602055eea99d87947de0bd8460926c24c088f840f647d0727fffc1c9e025c39e->enter($__internal_602055eea99d87947de0bd8460926c24c088f840f647d0727fffc1c9e025c39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9cc47606726ec63247edd29267c86ab9d25b16378e93693e5771e8caffb80564->leave($__internal_9cc47606726ec63247edd29267c86ab9d25b16378e93693e5771e8caffb80564_prof);

        
        $__internal_602055eea99d87947de0bd8460926c24c088f840f647d0727fffc1c9e025c39e->leave($__internal_602055eea99d87947de0bd8460926c24c088f840f647d0727fffc1c9e025c39e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
