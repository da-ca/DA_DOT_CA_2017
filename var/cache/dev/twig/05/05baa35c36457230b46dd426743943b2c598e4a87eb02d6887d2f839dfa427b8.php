<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9e54dadd2ea02faa5e9a864143613f5ee385fea6bfc6310cf697defa001e608c extends Twig_Template
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
        $__internal_56684670cf5344353a7f52624ac3c8a9f27524a1117778043c796ed4c2a5017c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56684670cf5344353a7f52624ac3c8a9f27524a1117778043c796ed4c2a5017c->enter($__internal_56684670cf5344353a7f52624ac3c8a9f27524a1117778043c796ed4c2a5017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_07874a9d62e1fe8e3cae6ab1b4ed144044474eb925a2dfd53ba08f09d1c8a041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07874a9d62e1fe8e3cae6ab1b4ed144044474eb925a2dfd53ba08f09d1c8a041->enter($__internal_07874a9d62e1fe8e3cae6ab1b4ed144044474eb925a2dfd53ba08f09d1c8a041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_56684670cf5344353a7f52624ac3c8a9f27524a1117778043c796ed4c2a5017c->leave($__internal_56684670cf5344353a7f52624ac3c8a9f27524a1117778043c796ed4c2a5017c_prof);

        
        $__internal_07874a9d62e1fe8e3cae6ab1b4ed144044474eb925a2dfd53ba08f09d1c8a041->leave($__internal_07874a9d62e1fe8e3cae6ab1b4ed144044474eb925a2dfd53ba08f09d1c8a041_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
