<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e0c42f0de89eb26015f20c6f44f5a56b998e068c4c5dfacf410dd7b8df512362 extends Twig_Template
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
        $__internal_f73af9d48bd37d65a255a11ce8293e55aab3218f53566ce83e14cf77f77b93e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73af9d48bd37d65a255a11ce8293e55aab3218f53566ce83e14cf77f77b93e4->enter($__internal_f73af9d48bd37d65a255a11ce8293e55aab3218f53566ce83e14cf77f77b93e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e5353983cf4a0103af4917096f9ea5b57e444232c6832c3eaf22225a115b77d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5353983cf4a0103af4917096f9ea5b57e444232c6832c3eaf22225a115b77d7->enter($__internal_e5353983cf4a0103af4917096f9ea5b57e444232c6832c3eaf22225a115b77d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f73af9d48bd37d65a255a11ce8293e55aab3218f53566ce83e14cf77f77b93e4->leave($__internal_f73af9d48bd37d65a255a11ce8293e55aab3218f53566ce83e14cf77f77b93e4_prof);

        
        $__internal_e5353983cf4a0103af4917096f9ea5b57e444232c6832c3eaf22225a115b77d7->leave($__internal_e5353983cf4a0103af4917096f9ea5b57e444232c6832c3eaf22225a115b77d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
