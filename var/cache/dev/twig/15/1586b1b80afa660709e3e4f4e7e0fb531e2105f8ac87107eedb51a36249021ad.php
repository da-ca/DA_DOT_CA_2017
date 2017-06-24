<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a57f600ed84196dc4b06e5e9ebc190d198bb20d747b74439978da38531736e32 extends Twig_Template
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
        $__internal_51471cd8f5874e670b4a6484464e9490e9ddd6f88f4d2927b76603ac6960bb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51471cd8f5874e670b4a6484464e9490e9ddd6f88f4d2927b76603ac6960bb23->enter($__internal_51471cd8f5874e670b4a6484464e9490e9ddd6f88f4d2927b76603ac6960bb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c872a0e8d81b0ba717ed8725b907b55a563bb6164f1746b0e2e1ad631c58401a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c872a0e8d81b0ba717ed8725b907b55a563bb6164f1746b0e2e1ad631c58401a->enter($__internal_c872a0e8d81b0ba717ed8725b907b55a563bb6164f1746b0e2e1ad631c58401a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_51471cd8f5874e670b4a6484464e9490e9ddd6f88f4d2927b76603ac6960bb23->leave($__internal_51471cd8f5874e670b4a6484464e9490e9ddd6f88f4d2927b76603ac6960bb23_prof);

        
        $__internal_c872a0e8d81b0ba717ed8725b907b55a563bb6164f1746b0e2e1ad631c58401a->leave($__internal_c872a0e8d81b0ba717ed8725b907b55a563bb6164f1746b0e2e1ad631c58401a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
