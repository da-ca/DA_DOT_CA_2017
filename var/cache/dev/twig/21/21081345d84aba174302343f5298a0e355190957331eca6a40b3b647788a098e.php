<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7b8303389dc53eb554db6256e6c9ebd235177515ff6f6064a31288b76bc87403 extends Twig_Template
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
        $__internal_b886d29e9e4179bc46e96a1a57a437a784736a8c290f899b95751ff6fbb8c275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b886d29e9e4179bc46e96a1a57a437a784736a8c290f899b95751ff6fbb8c275->enter($__internal_b886d29e9e4179bc46e96a1a57a437a784736a8c290f899b95751ff6fbb8c275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c52ed98b01a82f7e67f9d91033cadece564f791686f3f5589015eace71fc6fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52ed98b01a82f7e67f9d91033cadece564f791686f3f5589015eace71fc6fbb->enter($__internal_c52ed98b01a82f7e67f9d91033cadece564f791686f3f5589015eace71fc6fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b886d29e9e4179bc46e96a1a57a437a784736a8c290f899b95751ff6fbb8c275->leave($__internal_b886d29e9e4179bc46e96a1a57a437a784736a8c290f899b95751ff6fbb8c275_prof);

        
        $__internal_c52ed98b01a82f7e67f9d91033cadece564f791686f3f5589015eace71fc6fbb->leave($__internal_c52ed98b01a82f7e67f9d91033cadece564f791686f3f5589015eace71fc6fbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
