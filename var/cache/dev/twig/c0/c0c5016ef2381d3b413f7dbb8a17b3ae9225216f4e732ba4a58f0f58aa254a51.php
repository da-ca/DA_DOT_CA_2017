<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0bec796104c9f69235915dfcaf13142c3b5d5e35962e4aa418ae7be8b31c37b9 extends Twig_Template
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
        $__internal_999e38922b936f5ead9dd0f742d79dcfafae48c1152f96fd5faa9a72f650a81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999e38922b936f5ead9dd0f742d79dcfafae48c1152f96fd5faa9a72f650a81a->enter($__internal_999e38922b936f5ead9dd0f742d79dcfafae48c1152f96fd5faa9a72f650a81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5e91d9b3e7702568241d0a17a2ed77f2a370e214fe45aa1e71199eb5b64536b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e91d9b3e7702568241d0a17a2ed77f2a370e214fe45aa1e71199eb5b64536b1->enter($__internal_5e91d9b3e7702568241d0a17a2ed77f2a370e214fe45aa1e71199eb5b64536b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_999e38922b936f5ead9dd0f742d79dcfafae48c1152f96fd5faa9a72f650a81a->leave($__internal_999e38922b936f5ead9dd0f742d79dcfafae48c1152f96fd5faa9a72f650a81a_prof);

        
        $__internal_5e91d9b3e7702568241d0a17a2ed77f2a370e214fe45aa1e71199eb5b64536b1->leave($__internal_5e91d9b3e7702568241d0a17a2ed77f2a370e214fe45aa1e71199eb5b64536b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
