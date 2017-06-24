<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_eb70433f92c9296f2f48d62510ea5f9ce33e0752a3929d6d241bacd626741921 extends Twig_Template
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
        $__internal_34e52ff046551d143cfb4511e6dc9a243be48ca4b74b8e111d3de9755c59f729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e52ff046551d143cfb4511e6dc9a243be48ca4b74b8e111d3de9755c59f729->enter($__internal_34e52ff046551d143cfb4511e6dc9a243be48ca4b74b8e111d3de9755c59f729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6ee1cece2fb3a661aba85c619104c310d85595f84682c4c6d1e79fb7e6c53781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee1cece2fb3a661aba85c619104c310d85595f84682c4c6d1e79fb7e6c53781->enter($__internal_6ee1cece2fb3a661aba85c619104c310d85595f84682c4c6d1e79fb7e6c53781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_34e52ff046551d143cfb4511e6dc9a243be48ca4b74b8e111d3de9755c59f729->leave($__internal_34e52ff046551d143cfb4511e6dc9a243be48ca4b74b8e111d3de9755c59f729_prof);

        
        $__internal_6ee1cece2fb3a661aba85c619104c310d85595f84682c4c6d1e79fb7e6c53781->leave($__internal_6ee1cece2fb3a661aba85c619104c310d85595f84682c4c6d1e79fb7e6c53781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
