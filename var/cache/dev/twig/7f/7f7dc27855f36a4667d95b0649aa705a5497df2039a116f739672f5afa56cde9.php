<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c8a28adda03aa9eaa3a31ec92a542d301fad0a2afda82a8e0ecb9656da9d53dc extends Twig_Template
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
        $__internal_7518254f52c5ca2c307d597ca539e026d22b0aea01f3b879890aebae17dbf93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7518254f52c5ca2c307d597ca539e026d22b0aea01f3b879890aebae17dbf93a->enter($__internal_7518254f52c5ca2c307d597ca539e026d22b0aea01f3b879890aebae17dbf93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_dd698ee18593ce457dc6ed8ddded1e54c05c4f383248966f2a57d4fcd66ade2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd698ee18593ce457dc6ed8ddded1e54c05c4f383248966f2a57d4fcd66ade2d->enter($__internal_dd698ee18593ce457dc6ed8ddded1e54c05c4f383248966f2a57d4fcd66ade2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7518254f52c5ca2c307d597ca539e026d22b0aea01f3b879890aebae17dbf93a->leave($__internal_7518254f52c5ca2c307d597ca539e026d22b0aea01f3b879890aebae17dbf93a_prof);

        
        $__internal_dd698ee18593ce457dc6ed8ddded1e54c05c4f383248966f2a57d4fcd66ade2d->leave($__internal_dd698ee18593ce457dc6ed8ddded1e54c05c4f383248966f2a57d4fcd66ade2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
