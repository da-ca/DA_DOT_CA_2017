<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3badf3764b76114eb9f26f46c66d36926c3cedcb02cce513bfceecde525a53e5 extends Twig_Template
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
        $__internal_3255e6f5e95a7a730d2a0562d7ee2e5d766a9b43739d5dc91264054ea55bc112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3255e6f5e95a7a730d2a0562d7ee2e5d766a9b43739d5dc91264054ea55bc112->enter($__internal_3255e6f5e95a7a730d2a0562d7ee2e5d766a9b43739d5dc91264054ea55bc112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e3e7310f0eb201277ea232ea0945b3acedeb613a1e7d04bc626cc284394f0840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e7310f0eb201277ea232ea0945b3acedeb613a1e7d04bc626cc284394f0840->enter($__internal_e3e7310f0eb201277ea232ea0945b3acedeb613a1e7d04bc626cc284394f0840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3255e6f5e95a7a730d2a0562d7ee2e5d766a9b43739d5dc91264054ea55bc112->leave($__internal_3255e6f5e95a7a730d2a0562d7ee2e5d766a9b43739d5dc91264054ea55bc112_prof);

        
        $__internal_e3e7310f0eb201277ea232ea0945b3acedeb613a1e7d04bc626cc284394f0840->leave($__internal_e3e7310f0eb201277ea232ea0945b3acedeb613a1e7d04bc626cc284394f0840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
