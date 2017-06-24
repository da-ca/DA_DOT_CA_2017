<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c1f9030fbef17d71408758ff76457204565938631c29a3fb52be0da2e32acf4f extends Twig_Template
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
        $__internal_bac6974f2c56eb66d107cdf4cbae30c40ccd67f9d7d72dbf52383c45e2a95608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac6974f2c56eb66d107cdf4cbae30c40ccd67f9d7d72dbf52383c45e2a95608->enter($__internal_bac6974f2c56eb66d107cdf4cbae30c40ccd67f9d7d72dbf52383c45e2a95608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1232a54bde29aaf2df8e6b21d945abecaa97138f57ee98dd6b9f7fd86df27a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1232a54bde29aaf2df8e6b21d945abecaa97138f57ee98dd6b9f7fd86df27a41->enter($__internal_1232a54bde29aaf2df8e6b21d945abecaa97138f57ee98dd6b9f7fd86df27a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bac6974f2c56eb66d107cdf4cbae30c40ccd67f9d7d72dbf52383c45e2a95608->leave($__internal_bac6974f2c56eb66d107cdf4cbae30c40ccd67f9d7d72dbf52383c45e2a95608_prof);

        
        $__internal_1232a54bde29aaf2df8e6b21d945abecaa97138f57ee98dd6b9f7fd86df27a41->leave($__internal_1232a54bde29aaf2df8e6b21d945abecaa97138f57ee98dd6b9f7fd86df27a41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
