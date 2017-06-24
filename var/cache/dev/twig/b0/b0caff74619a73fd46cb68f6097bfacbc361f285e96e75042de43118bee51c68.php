<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6fb2b7b1dad34ecb9f3e1ce8ab3a295a6548f12a1506127325cefb96d95b7cb9 extends Twig_Template
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
        $__internal_b5a079e1298d0f959c9b37843bd92ecab423ab7fd375c98a58de4052acb54032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a079e1298d0f959c9b37843bd92ecab423ab7fd375c98a58de4052acb54032->enter($__internal_b5a079e1298d0f959c9b37843bd92ecab423ab7fd375c98a58de4052acb54032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_99cef4ad951a77c0b6ee2db3db2a01e98815fb9d4453059f31aea6987f322ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cef4ad951a77c0b6ee2db3db2a01e98815fb9d4453059f31aea6987f322ed1->enter($__internal_99cef4ad951a77c0b6ee2db3db2a01e98815fb9d4453059f31aea6987f322ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b5a079e1298d0f959c9b37843bd92ecab423ab7fd375c98a58de4052acb54032->leave($__internal_b5a079e1298d0f959c9b37843bd92ecab423ab7fd375c98a58de4052acb54032_prof);

        
        $__internal_99cef4ad951a77c0b6ee2db3db2a01e98815fb9d4453059f31aea6987f322ed1->leave($__internal_99cef4ad951a77c0b6ee2db3db2a01e98815fb9d4453059f31aea6987f322ed1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
