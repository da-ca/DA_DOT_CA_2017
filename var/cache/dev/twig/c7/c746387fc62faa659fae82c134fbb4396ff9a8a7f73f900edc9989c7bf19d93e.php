<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b786cad89d7013ce1a4db660d83b108f3c26ee94d30d5af75986a122e9defc99 extends Twig_Template
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
        $__internal_b356c5741eae2e5efda887179832b434317475f9bb146f526ec12c701bf4c308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b356c5741eae2e5efda887179832b434317475f9bb146f526ec12c701bf4c308->enter($__internal_b356c5741eae2e5efda887179832b434317475f9bb146f526ec12c701bf4c308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7f9506108d0f099fa50b77556769e02f21f07b2f7f21a65cf59ddc1cc233aa31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9506108d0f099fa50b77556769e02f21f07b2f7f21a65cf59ddc1cc233aa31->enter($__internal_7f9506108d0f099fa50b77556769e02f21f07b2f7f21a65cf59ddc1cc233aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b356c5741eae2e5efda887179832b434317475f9bb146f526ec12c701bf4c308->leave($__internal_b356c5741eae2e5efda887179832b434317475f9bb146f526ec12c701bf4c308_prof);

        
        $__internal_7f9506108d0f099fa50b77556769e02f21f07b2f7f21a65cf59ddc1cc233aa31->leave($__internal_7f9506108d0f099fa50b77556769e02f21f07b2f7f21a65cf59ddc1cc233aa31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
