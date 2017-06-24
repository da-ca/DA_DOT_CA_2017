<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_89cc487e971b2c4e636d84a99612763b428eb6dd7b283f6d01801fa6cb8033d7 extends Twig_Template
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
        $__internal_bac751772bf308f867de162abe5af65e978ea7773bf87d8aa938c07b713e37d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac751772bf308f867de162abe5af65e978ea7773bf87d8aa938c07b713e37d1->enter($__internal_bac751772bf308f867de162abe5af65e978ea7773bf87d8aa938c07b713e37d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ac9c8beaa8d4049513bc801e8dab9c47a3875cab63cc47cece3de690698580c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9c8beaa8d4049513bc801e8dab9c47a3875cab63cc47cece3de690698580c4->enter($__internal_ac9c8beaa8d4049513bc801e8dab9c47a3875cab63cc47cece3de690698580c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bac751772bf308f867de162abe5af65e978ea7773bf87d8aa938c07b713e37d1->leave($__internal_bac751772bf308f867de162abe5af65e978ea7773bf87d8aa938c07b713e37d1_prof);

        
        $__internal_ac9c8beaa8d4049513bc801e8dab9c47a3875cab63cc47cece3de690698580c4->leave($__internal_ac9c8beaa8d4049513bc801e8dab9c47a3875cab63cc47cece3de690698580c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
