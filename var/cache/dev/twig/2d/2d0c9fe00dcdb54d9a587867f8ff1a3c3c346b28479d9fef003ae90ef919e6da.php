<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_de0179775b3e25d3bc8001c5b4bdc5fcb79aa28a7d700e7a292ddeaab0d8a156 extends Twig_Template
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
        $__internal_0c77698b945a11b9af7f010910adca7d998d922049c44953e1b626f6834f6024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c77698b945a11b9af7f010910adca7d998d922049c44953e1b626f6834f6024->enter($__internal_0c77698b945a11b9af7f010910adca7d998d922049c44953e1b626f6834f6024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_faab72b219a434e351764cb9013dc37bfb942913105b1214ef325f88415aa681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faab72b219a434e351764cb9013dc37bfb942913105b1214ef325f88415aa681->enter($__internal_faab72b219a434e351764cb9013dc37bfb942913105b1214ef325f88415aa681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0c77698b945a11b9af7f010910adca7d998d922049c44953e1b626f6834f6024->leave($__internal_0c77698b945a11b9af7f010910adca7d998d922049c44953e1b626f6834f6024_prof);

        
        $__internal_faab72b219a434e351764cb9013dc37bfb942913105b1214ef325f88415aa681->leave($__internal_faab72b219a434e351764cb9013dc37bfb942913105b1214ef325f88415aa681_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
