<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c4f3fd367ab11925860317866735a2610874c7f39a0bd6a4f57374917eecdb7e extends Twig_Template
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
        $__internal_1cdf9131b3099c3084208b240f61ee2ec04ff2c335ebc3869ae8f712886f9988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdf9131b3099c3084208b240f61ee2ec04ff2c335ebc3869ae8f712886f9988->enter($__internal_1cdf9131b3099c3084208b240f61ee2ec04ff2c335ebc3869ae8f712886f9988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6c6fe03eb30e92b7b2631384f4805420689cebb502d9c49dc868785e80a82d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6fe03eb30e92b7b2631384f4805420689cebb502d9c49dc868785e80a82d12->enter($__internal_6c6fe03eb30e92b7b2631384f4805420689cebb502d9c49dc868785e80a82d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1cdf9131b3099c3084208b240f61ee2ec04ff2c335ebc3869ae8f712886f9988->leave($__internal_1cdf9131b3099c3084208b240f61ee2ec04ff2c335ebc3869ae8f712886f9988_prof);

        
        $__internal_6c6fe03eb30e92b7b2631384f4805420689cebb502d9c49dc868785e80a82d12->leave($__internal_6c6fe03eb30e92b7b2631384f4805420689cebb502d9c49dc868785e80a82d12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
