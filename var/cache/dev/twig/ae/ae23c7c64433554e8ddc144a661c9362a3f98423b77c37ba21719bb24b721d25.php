<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8cc3019ff51d803dc105dd7d5ed699153f56634b3077ee04f3d12f1d04f82f93 extends Twig_Template
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
        $__internal_a3fdfa81d248eb3dc57a7e04413e4a96016ddd88bb37613ed7a6907752e0578c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fdfa81d248eb3dc57a7e04413e4a96016ddd88bb37613ed7a6907752e0578c->enter($__internal_a3fdfa81d248eb3dc57a7e04413e4a96016ddd88bb37613ed7a6907752e0578c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f52f8b4516341b8e9170ece222be65877e257a0ceb277c5277e4b7f1faf43ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52f8b4516341b8e9170ece222be65877e257a0ceb277c5277e4b7f1faf43ad7->enter($__internal_f52f8b4516341b8e9170ece222be65877e257a0ceb277c5277e4b7f1faf43ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a3fdfa81d248eb3dc57a7e04413e4a96016ddd88bb37613ed7a6907752e0578c->leave($__internal_a3fdfa81d248eb3dc57a7e04413e4a96016ddd88bb37613ed7a6907752e0578c_prof);

        
        $__internal_f52f8b4516341b8e9170ece222be65877e257a0ceb277c5277e4b7f1faf43ad7->leave($__internal_f52f8b4516341b8e9170ece222be65877e257a0ceb277c5277e4b7f1faf43ad7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
