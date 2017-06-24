<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_60e8586ad44ac626a0227d3326911d79a4c0052e03f4230071816e616cb021c8 extends Twig_Template
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
        $__internal_241e50aab87460b3672738ffd07d1de1e774c12b09b5108ada750df4ac7bee5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241e50aab87460b3672738ffd07d1de1e774c12b09b5108ada750df4ac7bee5b->enter($__internal_241e50aab87460b3672738ffd07d1de1e774c12b09b5108ada750df4ac7bee5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_24d0ca612fa923b6ce8e2879a537304a5a6c79c8d4e13366e1c79b6938897262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d0ca612fa923b6ce8e2879a537304a5a6c79c8d4e13366e1c79b6938897262->enter($__internal_24d0ca612fa923b6ce8e2879a537304a5a6c79c8d4e13366e1c79b6938897262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_241e50aab87460b3672738ffd07d1de1e774c12b09b5108ada750df4ac7bee5b->leave($__internal_241e50aab87460b3672738ffd07d1de1e774c12b09b5108ada750df4ac7bee5b_prof);

        
        $__internal_24d0ca612fa923b6ce8e2879a537304a5a6c79c8d4e13366e1c79b6938897262->leave($__internal_24d0ca612fa923b6ce8e2879a537304a5a6c79c8d4e13366e1c79b6938897262_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
