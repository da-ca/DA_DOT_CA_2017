<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c83f06f75965a5e4caf818a2f7311601a4a65fe3740b5c01c8b996d3d343e771 extends Twig_Template
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
        $__internal_032b49bf2c784358ab8626bb9e56f7d4e4ed790670deb5a7ade35f536a73424d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032b49bf2c784358ab8626bb9e56f7d4e4ed790670deb5a7ade35f536a73424d->enter($__internal_032b49bf2c784358ab8626bb9e56f7d4e4ed790670deb5a7ade35f536a73424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_863577e80fd8a36a81370ed62e314221353d0e72c814f4d6c4b6e109523e4b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863577e80fd8a36a81370ed62e314221353d0e72c814f4d6c4b6e109523e4b21->enter($__internal_863577e80fd8a36a81370ed62e314221353d0e72c814f4d6c4b6e109523e4b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_032b49bf2c784358ab8626bb9e56f7d4e4ed790670deb5a7ade35f536a73424d->leave($__internal_032b49bf2c784358ab8626bb9e56f7d4e4ed790670deb5a7ade35f536a73424d_prof);

        
        $__internal_863577e80fd8a36a81370ed62e314221353d0e72c814f4d6c4b6e109523e4b21->leave($__internal_863577e80fd8a36a81370ed62e314221353d0e72c814f4d6c4b6e109523e4b21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
