<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8a2d2bd9ebe51bfb3d449511713e6b266b0d9687e5f1165ed2ba9c6d5507e812 extends Twig_Template
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
        $__internal_a12fa6756b279c16162a8b29b5f7567524e30276fa7230a90cfc301d809bc0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12fa6756b279c16162a8b29b5f7567524e30276fa7230a90cfc301d809bc0f0->enter($__internal_a12fa6756b279c16162a8b29b5f7567524e30276fa7230a90cfc301d809bc0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_42f3fece626a8edd32ca3500074a868c94158c8ab296117863465189fe7b2f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f3fece626a8edd32ca3500074a868c94158c8ab296117863465189fe7b2f71->enter($__internal_42f3fece626a8edd32ca3500074a868c94158c8ab296117863465189fe7b2f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a12fa6756b279c16162a8b29b5f7567524e30276fa7230a90cfc301d809bc0f0->leave($__internal_a12fa6756b279c16162a8b29b5f7567524e30276fa7230a90cfc301d809bc0f0_prof);

        
        $__internal_42f3fece626a8edd32ca3500074a868c94158c8ab296117863465189fe7b2f71->leave($__internal_42f3fece626a8edd32ca3500074a868c94158c8ab296117863465189fe7b2f71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
