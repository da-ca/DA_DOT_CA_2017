<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_571c67437858ccef595f8b4b573403459e103e274e7013e516836ee281ac139d extends Twig_Template
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
        $__internal_630f6658a3f9e267ebcf7b11c500e32308fa98d8127b26ed1d491d227fed2ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630f6658a3f9e267ebcf7b11c500e32308fa98d8127b26ed1d491d227fed2ba0->enter($__internal_630f6658a3f9e267ebcf7b11c500e32308fa98d8127b26ed1d491d227fed2ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f70ce365c8b1a760adc19e6ba284e27bb63dafaf0c88e0fb1f226dde49851e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70ce365c8b1a760adc19e6ba284e27bb63dafaf0c88e0fb1f226dde49851e59->enter($__internal_f70ce365c8b1a760adc19e6ba284e27bb63dafaf0c88e0fb1f226dde49851e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_630f6658a3f9e267ebcf7b11c500e32308fa98d8127b26ed1d491d227fed2ba0->leave($__internal_630f6658a3f9e267ebcf7b11c500e32308fa98d8127b26ed1d491d227fed2ba0_prof);

        
        $__internal_f70ce365c8b1a760adc19e6ba284e27bb63dafaf0c88e0fb1f226dde49851e59->leave($__internal_f70ce365c8b1a760adc19e6ba284e27bb63dafaf0c88e0fb1f226dde49851e59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
