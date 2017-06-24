<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_afc5129f08237d2cfbf710be6879ac3df126f83f32cfd3bb0e980df9a1a196d7 extends Twig_Template
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
        $__internal_997873bbdb8ee9ad8b2b36fe6a06e0ba43907ce3e633149917f530b597faaab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997873bbdb8ee9ad8b2b36fe6a06e0ba43907ce3e633149917f530b597faaab8->enter($__internal_997873bbdb8ee9ad8b2b36fe6a06e0ba43907ce3e633149917f530b597faaab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_fc00078d2d435fca207c26a852e5760f6a63f6f55aca2c3df1941bf863c2c42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc00078d2d435fca207c26a852e5760f6a63f6f55aca2c3df1941bf863c2c42b->enter($__internal_fc00078d2d435fca207c26a852e5760f6a63f6f55aca2c3df1941bf863c2c42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_997873bbdb8ee9ad8b2b36fe6a06e0ba43907ce3e633149917f530b597faaab8->leave($__internal_997873bbdb8ee9ad8b2b36fe6a06e0ba43907ce3e633149917f530b597faaab8_prof);

        
        $__internal_fc00078d2d435fca207c26a852e5760f6a63f6f55aca2c3df1941bf863c2c42b->leave($__internal_fc00078d2d435fca207c26a852e5760f6a63f6f55aca2c3df1941bf863c2c42b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
