<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_8fe0fef73fe38b2c00186cad791b2b52c433c00dc55ff52e32c9ade7eefc0788 extends Twig_Template
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
        $__internal_8c55e2fc73df1e65b0cd4ab5be2e30c672286df4681cbbf75e952765f59fc01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c55e2fc73df1e65b0cd4ab5be2e30c672286df4681cbbf75e952765f59fc01b->enter($__internal_8c55e2fc73df1e65b0cd4ab5be2e30c672286df4681cbbf75e952765f59fc01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0c6efe69a5951a711cf0fd6690dc1d6ed3eb2d005c04bf53d1317f5333fd6a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6efe69a5951a711cf0fd6690dc1d6ed3eb2d005c04bf53d1317f5333fd6a08->enter($__internal_0c6efe69a5951a711cf0fd6690dc1d6ed3eb2d005c04bf53d1317f5333fd6a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8c55e2fc73df1e65b0cd4ab5be2e30c672286df4681cbbf75e952765f59fc01b->leave($__internal_8c55e2fc73df1e65b0cd4ab5be2e30c672286df4681cbbf75e952765f59fc01b_prof);

        
        $__internal_0c6efe69a5951a711cf0fd6690dc1d6ed3eb2d005c04bf53d1317f5333fd6a08->leave($__internal_0c6efe69a5951a711cf0fd6690dc1d6ed3eb2d005c04bf53d1317f5333fd6a08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
