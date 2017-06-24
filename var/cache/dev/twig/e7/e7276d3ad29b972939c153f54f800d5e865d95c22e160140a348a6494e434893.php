<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_bdd1c77e350d8679ef8bdd6bc809d58dcbb5fdc8bd2f4f918987b981a4db5813 extends Twig_Template
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
        $__internal_81487c7fafec5b352bea23561d01b8c663e01ce02f0f7952ec861deecf213996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81487c7fafec5b352bea23561d01b8c663e01ce02f0f7952ec861deecf213996->enter($__internal_81487c7fafec5b352bea23561d01b8c663e01ce02f0f7952ec861deecf213996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_27ededba1273ba153519642711b42202265d45b078ee04b7754f1ea1f5b6079b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ededba1273ba153519642711b42202265d45b078ee04b7754f1ea1f5b6079b->enter($__internal_27ededba1273ba153519642711b42202265d45b078ee04b7754f1ea1f5b6079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_81487c7fafec5b352bea23561d01b8c663e01ce02f0f7952ec861deecf213996->leave($__internal_81487c7fafec5b352bea23561d01b8c663e01ce02f0f7952ec861deecf213996_prof);

        
        $__internal_27ededba1273ba153519642711b42202265d45b078ee04b7754f1ea1f5b6079b->leave($__internal_27ededba1273ba153519642711b42202265d45b078ee04b7754f1ea1f5b6079b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
