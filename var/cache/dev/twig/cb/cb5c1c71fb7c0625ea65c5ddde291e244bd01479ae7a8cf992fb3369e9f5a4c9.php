<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d597f46e25a8978811b44d9707740e09ef7b844462d16ed2a99e6a46c9bf9285 extends Twig_Template
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
        $__internal_3bc9227a0060a2e47d30689270e4f7b33f68fcf7e32183d166bf0635570277a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc9227a0060a2e47d30689270e4f7b33f68fcf7e32183d166bf0635570277a4->enter($__internal_3bc9227a0060a2e47d30689270e4f7b33f68fcf7e32183d166bf0635570277a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5b60d5998ecfe6a5fa1a2f3214d53090747184c51c1dba5e70397b6710a6b5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b60d5998ecfe6a5fa1a2f3214d53090747184c51c1dba5e70397b6710a6b5ba->enter($__internal_5b60d5998ecfe6a5fa1a2f3214d53090747184c51c1dba5e70397b6710a6b5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3bc9227a0060a2e47d30689270e4f7b33f68fcf7e32183d166bf0635570277a4->leave($__internal_3bc9227a0060a2e47d30689270e4f7b33f68fcf7e32183d166bf0635570277a4_prof);

        
        $__internal_5b60d5998ecfe6a5fa1a2f3214d53090747184c51c1dba5e70397b6710a6b5ba->leave($__internal_5b60d5998ecfe6a5fa1a2f3214d53090747184c51c1dba5e70397b6710a6b5ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
