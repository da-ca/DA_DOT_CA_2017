<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8c382663cf11dfe03a2188578fbb5bd98ea1bc66e1b6b410a48a4b7f356af4ba extends Twig_Template
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
        $__internal_1043061497d7493574e3fccf476597c0f6842034cdd39b63c24292703e5f396b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1043061497d7493574e3fccf476597c0f6842034cdd39b63c24292703e5f396b->enter($__internal_1043061497d7493574e3fccf476597c0f6842034cdd39b63c24292703e5f396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e53ab3cecc5bb041ce508e6c36731680d786cb5c9849bb6d2ebf53c2fa082d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53ab3cecc5bb041ce508e6c36731680d786cb5c9849bb6d2ebf53c2fa082d9c->enter($__internal_e53ab3cecc5bb041ce508e6c36731680d786cb5c9849bb6d2ebf53c2fa082d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1043061497d7493574e3fccf476597c0f6842034cdd39b63c24292703e5f396b->leave($__internal_1043061497d7493574e3fccf476597c0f6842034cdd39b63c24292703e5f396b_prof);

        
        $__internal_e53ab3cecc5bb041ce508e6c36731680d786cb5c9849bb6d2ebf53c2fa082d9c->leave($__internal_e53ab3cecc5bb041ce508e6c36731680d786cb5c9849bb6d2ebf53c2fa082d9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
