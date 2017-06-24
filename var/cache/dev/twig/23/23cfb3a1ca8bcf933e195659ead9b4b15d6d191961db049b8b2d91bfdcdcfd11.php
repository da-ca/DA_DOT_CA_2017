<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_917c248492636965ea70adbe46bd59edc55c68776cd28e5af2b265ac1e69d6a3 extends Twig_Template
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
        $__internal_bb835da9d7dd11173e12a8b76ebcb0f59eddfe7bad865f84201ab4ebd69c024c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb835da9d7dd11173e12a8b76ebcb0f59eddfe7bad865f84201ab4ebd69c024c->enter($__internal_bb835da9d7dd11173e12a8b76ebcb0f59eddfe7bad865f84201ab4ebd69c024c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c1e086b6903652248b6e2c8a3331e1c8c67bf8c3ef791c72426227ec6b75a3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e086b6903652248b6e2c8a3331e1c8c67bf8c3ef791c72426227ec6b75a3a7->enter($__internal_c1e086b6903652248b6e2c8a3331e1c8c67bf8c3ef791c72426227ec6b75a3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bb835da9d7dd11173e12a8b76ebcb0f59eddfe7bad865f84201ab4ebd69c024c->leave($__internal_bb835da9d7dd11173e12a8b76ebcb0f59eddfe7bad865f84201ab4ebd69c024c_prof);

        
        $__internal_c1e086b6903652248b6e2c8a3331e1c8c67bf8c3ef791c72426227ec6b75a3a7->leave($__internal_c1e086b6903652248b6e2c8a3331e1c8c67bf8c3ef791c72426227ec6b75a3a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
