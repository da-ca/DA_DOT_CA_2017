<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3df422872d8ba6e5c93c08167b95de067b93756238336b3273bba190f7890b51 extends Twig_Template
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
        $__internal_5ad02c30d3ee3d5b641a30ae184c4f156ddfa492f4240e4c3677394183795f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad02c30d3ee3d5b641a30ae184c4f156ddfa492f4240e4c3677394183795f1d->enter($__internal_5ad02c30d3ee3d5b641a30ae184c4f156ddfa492f4240e4c3677394183795f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bf45b5c84cb4aba07ac2a8e32beb173eb22deea4d0b2a02e6803da8c6f80062a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf45b5c84cb4aba07ac2a8e32beb173eb22deea4d0b2a02e6803da8c6f80062a->enter($__internal_bf45b5c84cb4aba07ac2a8e32beb173eb22deea4d0b2a02e6803da8c6f80062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5ad02c30d3ee3d5b641a30ae184c4f156ddfa492f4240e4c3677394183795f1d->leave($__internal_5ad02c30d3ee3d5b641a30ae184c4f156ddfa492f4240e4c3677394183795f1d_prof);

        
        $__internal_bf45b5c84cb4aba07ac2a8e32beb173eb22deea4d0b2a02e6803da8c6f80062a->leave($__internal_bf45b5c84cb4aba07ac2a8e32beb173eb22deea4d0b2a02e6803da8c6f80062a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
