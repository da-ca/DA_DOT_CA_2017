<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f6bd4b943c1fb2d60f9d06361f6aece7834852ab94c6c1175a1f42d7da59677a extends Twig_Template
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
        $__internal_61cd57fa87622284b7cc0e2841b70edd32b147d5668a944d58aaae071d1bf46a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61cd57fa87622284b7cc0e2841b70edd32b147d5668a944d58aaae071d1bf46a->enter($__internal_61cd57fa87622284b7cc0e2841b70edd32b147d5668a944d58aaae071d1bf46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f33c8327632ffd39fa7204d530e32d384e311da82c1eb1cbe2a306490334a8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33c8327632ffd39fa7204d530e32d384e311da82c1eb1cbe2a306490334a8f1->enter($__internal_f33c8327632ffd39fa7204d530e32d384e311da82c1eb1cbe2a306490334a8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_61cd57fa87622284b7cc0e2841b70edd32b147d5668a944d58aaae071d1bf46a->leave($__internal_61cd57fa87622284b7cc0e2841b70edd32b147d5668a944d58aaae071d1bf46a_prof);

        
        $__internal_f33c8327632ffd39fa7204d530e32d384e311da82c1eb1cbe2a306490334a8f1->leave($__internal_f33c8327632ffd39fa7204d530e32d384e311da82c1eb1cbe2a306490334a8f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
