<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3f544b1b6a133cd6b6e9d48c97b7df9164fd93c4deaac945fd92c23f6ae56558 extends Twig_Template
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
        $__internal_46af1f37a8d7fc6db4628c0d7221f3e2523e726e845bc8ee01a0c6016afb9090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46af1f37a8d7fc6db4628c0d7221f3e2523e726e845bc8ee01a0c6016afb9090->enter($__internal_46af1f37a8d7fc6db4628c0d7221f3e2523e726e845bc8ee01a0c6016afb9090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fb087da3daab21ccb3054a741e9729c98b276aa6eb30f806e7cf6b2456bf3368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb087da3daab21ccb3054a741e9729c98b276aa6eb30f806e7cf6b2456bf3368->enter($__internal_fb087da3daab21ccb3054a741e9729c98b276aa6eb30f806e7cf6b2456bf3368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_46af1f37a8d7fc6db4628c0d7221f3e2523e726e845bc8ee01a0c6016afb9090->leave($__internal_46af1f37a8d7fc6db4628c0d7221f3e2523e726e845bc8ee01a0c6016afb9090_prof);

        
        $__internal_fb087da3daab21ccb3054a741e9729c98b276aa6eb30f806e7cf6b2456bf3368->leave($__internal_fb087da3daab21ccb3054a741e9729c98b276aa6eb30f806e7cf6b2456bf3368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
