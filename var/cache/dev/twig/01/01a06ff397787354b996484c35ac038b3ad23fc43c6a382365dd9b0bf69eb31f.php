<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e0abfa81407ca31c5f98b468734cf3d2ea351b81b2ff7643eb9c90cc95409087 extends Twig_Template
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
        $__internal_7ddbc22fa47203fcd1a800953edb6a62749103100e6d898cefffe5c426bc2eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ddbc22fa47203fcd1a800953edb6a62749103100e6d898cefffe5c426bc2eba->enter($__internal_7ddbc22fa47203fcd1a800953edb6a62749103100e6d898cefffe5c426bc2eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8e79a4fa07308f5f301769f603177b9038ff70323fef489f64252fc495a5e9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e79a4fa07308f5f301769f603177b9038ff70323fef489f64252fc495a5e9be->enter($__internal_8e79a4fa07308f5f301769f603177b9038ff70323fef489f64252fc495a5e9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7ddbc22fa47203fcd1a800953edb6a62749103100e6d898cefffe5c426bc2eba->leave($__internal_7ddbc22fa47203fcd1a800953edb6a62749103100e6d898cefffe5c426bc2eba_prof);

        
        $__internal_8e79a4fa07308f5f301769f603177b9038ff70323fef489f64252fc495a5e9be->leave($__internal_8e79a4fa07308f5f301769f603177b9038ff70323fef489f64252fc495a5e9be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
